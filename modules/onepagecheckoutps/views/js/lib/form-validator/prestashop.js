/**
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2019 PresTeamShop
 * @license   see file: LICENSE.txt
 * @category  PrestaShop
 * @category  Module
 */

var unicode_hack = (function() {
    /* Regexps to match characters in the BMP according to their Unicode category.
       Extracted from Unicode specification, version 5.0.0, source:
       http://unicode.org/versions/Unicode5.0.0/
    */
	var unicodeCategories = {
		Pi:'[\u00ab\u2018\u201b\u201c\u201f\u2039\u2e02\u2e04\u2e09\u2e0c\u2e1c]',
		Sk:'[\u005e\u0060\u00a8\u00af\u00b4\u00b8\u02c2-\u02c5\u02d2-\u02df\u02e5-\u02ed\u02ef-\u02ff\u0374\u0375\u0384\u0385\u1fbd\u1fbf-\u1fc1\u1fcd-\u1fcf\u1fdd-\u1fdf\u1fed-\u1fef\u1ffd\u1ffe\u309b\u309c\ua700-\ua716\ua720\ua721\uff3e\uff40\uffe3]',
		Sm:'[\u002b\u003c-\u003e\u007c\u007e\u00ac\u00b1\u00d7\u00f7\u03f6\u2044\u2052\u207a-\u207c\u208a-\u208c\u2140-\u2144\u214b\u2190-\u2194\u219a\u219b\u21a0\u21a3\u21a6\u21ae\u21ce\u21cf\u21d2\u21d4\u21f4-\u22ff\u2308-\u230b\u2320\u2321\u237c\u239b-\u23b3\u23dc-\u23e1\u25b7\u25c1\u25f8-\u25ff\u266f\u27c0-\u27c4\u27c7-\u27ca\u27d0-\u27e5\u27f0-\u27ff\u2900-\u2982\u2999-\u29d7\u29dc-\u29fb\u29fe-\u2aff\ufb29\ufe62\ufe64-\ufe66\uff0b\uff1c-\uff1e\uff5c\uff5e\uffe2\uffe9-\uffec]',
		So:'[\u00a6\u00a7\u00a9\u00ae\u00b0\u00b6\u0482\u060e\u060f\u06e9\u06fd\u06fe\u07f6\u09fa\u0b70\u0bf3-\u0bf8\u0bfa\u0cf1\u0cf2\u0f01-\u0f03\u0f13-\u0f17\u0f1a-\u0f1f\u0f34\u0f36\u0f38\u0fbe-\u0fc5\u0fc7-\u0fcc\u0fcf\u1360\u1390-\u1399\u1940\u19e0-\u19ff\u1b61-\u1b6a\u1b74-\u1b7c\u2100\u2101\u2103-\u2106\u2108\u2109\u2114\u2116-\u2118\u211e-\u2123\u2125\u2127\u2129\u212e\u213a\u213b\u214a\u214c\u214d\u2195-\u2199\u219c-\u219f\u21a1\u21a2\u21a4\u21a5\u21a7-\u21ad\u21af-\u21cd\u21d0\u21d1\u21d3\u21d5-\u21f3\u2300-\u2307\u230c-\u231f\u2322-\u2328\u232b-\u237b\u237d-\u239a\u23b4-\u23db\u23e2-\u23e7\u2400-\u2426\u2440-\u244a\u249c-\u24e9\u2500-\u25b6\u25b8-\u25c0\u25c2-\u25f7\u2600-\u266e\u2670-\u269c\u26a0-\u26b2\u2701-\u2704\u2706-\u2709\u270c-\u2727\u2729-\u274b\u274d\u274f-\u2752\u2756\u2758-\u275e\u2761-\u2767\u2794\u2798-\u27af\u27b1-\u27be\u2800-\u28ff\u2b00-\u2b1a\u2b20-\u2b23\u2ce5-\u2cea\u2e80-\u2e99\u2e9b-\u2ef3\u2f00-\u2fd5\u2ff0-\u2ffb\u3004\u3012\u3013\u3020\u3036\u3037\u303e\u303f\u3190\u3191\u3196-\u319f\u31c0-\u31cf\u3200-\u321e\u322a-\u3243\u3250\u3260-\u327f\u328a-\u32b0\u32c0-\u32fe\u3300-\u33ff\u4dc0-\u4dff\ua490-\ua4c6\ua828-\ua82b\ufdfd\uffe4\uffe8\uffed\uffee\ufffc\ufffd]',
		Po:'[\u0021-\u0023\u0025-\u0027\u002a\u002c\u002e\u002f\u003a\u003b\u003f\u0040\u005c\u00a1\u00b7\u00bf\u037e\u0387\u055a-\u055f\u0589\u05be\u05c0\u05c3\u05c6\u05f3\u05f4\u060c\u060d\u061b\u061e\u061f\u066a-\u066d\u06d4\u0700-\u070d\u07f7-\u07f9\u0964\u0965\u0970\u0df4\u0e4f\u0e5a\u0e5b\u0f04-\u0f12\u0f85\u0fd0\u0fd1\u104a-\u104f\u10fb\u1361-\u1368\u166d\u166e\u16eb-\u16ed\u1735\u1736\u17d4-\u17d6\u17d8-\u17da\u1800-\u1805\u1807-\u180a\u1944\u1945\u19de\u19df\u1a1e\u1a1f\u1b5a-\u1b60\u2016\u2017\u2020-\u2027\u2030-\u2038\u203b-\u203e\u2041-\u2043\u2047-\u2051\u2053\u2055-\u205e\u2cf9-\u2cfc\u2cfe\u2cff\u2e00\u2e01\u2e06-\u2e08\u2e0b\u2e0e-\u2e16\u3001-\u3003\u303d\u30fb\ua874-\ua877\ufe10-\ufe16\ufe19\ufe30\ufe45\ufe46\ufe49-\ufe4c\ufe50-\ufe52\ufe54-\ufe57\ufe5f-\ufe61\ufe68\ufe6a\ufe6b\uff01-\uff03\uff05-\uff07\uff0a\uff0c\uff0e\uff0f\uff1a\uff1b\uff1f\uff20\uff3c\uff61\uff64\uff65]',
		Mn:'[\u0300-\u036f\u0483-\u0486\u0591-\u05bd\u05bf\u05c1\u05c2\u05c4\u05c5\u05c7\u0610-\u0615\u064b-\u065e\u0670\u06d6-\u06dc\u06df-\u06e4\u06e7\u06e8\u06ea-\u06ed\u0711\u0730-\u074a\u07a6-\u07b0\u07eb-\u07f3\u0901\u0902\u093c\u0941-\u0948\u094d\u0951-\u0954\u0962\u0963\u0981\u09bc\u09c1-\u09c4\u09cd\u09e2\u09e3\u0a01\u0a02\u0a3c\u0a41\u0a42\u0a47\u0a48\u0a4b-\u0a4d\u0a70\u0a71\u0a81\u0a82\u0abc\u0ac1-\u0ac5\u0ac7\u0ac8\u0acd\u0ae2\u0ae3\u0b01\u0b3c\u0b3f\u0b41-\u0b43\u0b4d\u0b56\u0b82\u0bc0\u0bcd\u0c3e-\u0c40\u0c46-\u0c48\u0c4a-\u0c4d\u0c55\u0c56\u0cbc\u0cbf\u0cc6\u0ccc\u0ccd\u0ce2\u0ce3\u0d41-\u0d43\u0d4d\u0dca\u0dd2-\u0dd4\u0dd6\u0e31\u0e34-\u0e3a\u0e47-\u0e4e\u0eb1\u0eb4-\u0eb9\u0ebb\u0ebc\u0ec8-\u0ecd\u0f18\u0f19\u0f35\u0f37\u0f39\u0f71-\u0f7e\u0f80-\u0f84\u0f86\u0f87\u0f90-\u0f97\u0f99-\u0fbc\u0fc6\u102d-\u1030\u1032\u1036\u1037\u1039\u1058\u1059\u135f\u1712-\u1714\u1732-\u1734\u1752\u1753\u1772\u1773\u17b7-\u17bd\u17c6\u17c9-\u17d3\u17dd\u180b-\u180d\u18a9\u1920-\u1922\u1927\u1928\u1932\u1939-\u193b\u1a17\u1a18\u1b00-\u1b03\u1b34\u1b36-\u1b3a\u1b3c\u1b42\u1b6b-\u1b73\u1dc0-\u1dca\u1dfe\u1dff\u20d0-\u20dc\u20e1\u20e5-\u20ef\u302a-\u302f\u3099\u309a\ua806\ua80b\ua825\ua826\ufb1e\ufe00-\ufe0f\ufe20-\ufe23]',
		Ps:'[\u0028\u005b\u007b\u0f3a\u0f3c\u169b\u201a\u201e\u2045\u207d\u208d\u2329\u2768\u276a\u276c\u276e\u2770\u2772\u2774\u27c5\u27e6\u27e8\u27ea\u2983\u2985\u2987\u2989\u298b\u298d\u298f\u2991\u2993\u2995\u2997\u29d8\u29da\u29fc\u3008\u300a\u300c\u300e\u3010\u3014\u3016\u3018\u301a\u301d\ufd3e\ufe17\ufe35\ufe37\ufe39\ufe3b\ufe3d\ufe3f\ufe41\ufe43\ufe47\ufe59\ufe5b\ufe5d\uff08\uff3b\uff5b\uff5f\uff62]',
		Cc:'[\u0000-\u001f\u007f-\u009f]',
		Cf:'[\u00ad\u0600-\u0603\u06dd\u070f\u17b4\u17b5\u200b-\u200f\u202a-\u202e\u2060-\u2063\u206a-\u206f\ufeff\ufff9-\ufffb]',
		Ll:'[\u0061-\u007a\u00aa\u00b5\u00ba\u00df-\u00f6\u00f8-\u00ff\u0101\u0103\u0105\u0107\u0109\u010b\u010d\u010f\u0111\u0113\u0115\u0117\u0119\u011b\u011d\u011f\u0121\u0123\u0125\u0127\u0129\u012b\u012d\u012f\u0131\u0133\u0135\u0137\u0138\u013a\u013c\u013e\u0140\u0142\u0144\u0146\u0148\u0149\u014b\u014d\u014f\u0151\u0153\u0155\u0157\u0159\u015b\u015d\u015f\u0161\u0163\u0165\u0167\u0169\u016b\u016d\u016f\u0171\u0173\u0175\u0177\u017a\u017c\u017e-\u0180\u0183\u0185\u0188\u018c\u018d\u0192\u0195\u0199-\u019b\u019e\u01a1\u01a3\u01a5\u01a8\u01aa\u01ab\u01ad\u01b0\u01b4\u01b6\u01b9\u01ba\u01bd-\u01bf\u01c6\u01c9\u01cc\u01ce\u01d0\u01d2\u01d4\u01d6\u01d8\u01da\u01dc\u01dd\u01df\u01e1\u01e3\u01e5\u01e7\u01e9\u01eb\u01ed\u01ef\u01f0\u01f3\u01f5\u01f9\u01fb\u01fd\u01ff\u0201\u0203\u0205\u0207\u0209\u020b\u020d\u020f\u0211\u0213\u0215\u0217\u0219\u021b\u021d\u021f\u0221\u0223\u0225\u0227\u0229\u022b\u022d\u022f\u0231\u0233-\u0239\u023c\u023f\u0240\u0242\u0247\u0249\u024b\u024d\u024f-\u0293\u0295-\u02af\u037b-\u037d\u0390\u03ac-\u03ce\u03d0\u03d1\u03d5-\u03d7\u03d9\u03db\u03dd\u03df\u03e1\u03e3\u03e5\u03e7\u03e9\u03eb\u03ed\u03ef-\u03f3\u03f5\u03f8\u03fb\u03fc\u0430-\u045f\u0461\u0463\u0465\u0467\u0469\u046b\u046d\u046f\u0471\u0473\u0475\u0477\u0479\u047b\u047d\u047f\u0481\u048b\u048d\u048f\u0491\u0493\u0495\u0497\u0499\u049b\u049d\u049f\u04a1\u04a3\u04a5\u04a7\u04a9\u04ab\u04ad\u04af\u04b1\u04b3\u04b5\u04b7\u04b9\u04bb\u04bd\u04bf\u04c2\u04c4\u04c6\u04c8\u04ca\u04cc\u04ce\u04cf\u04d1\u04d3\u04d5\u04d7\u04d9\u04db\u04dd\u04df\u04e1\u04e3\u04e5\u04e7\u04e9\u04eb\u04ed\u04ef\u04f1\u04f3\u04f5\u04f7\u04f9\u04fb\u04fd\u04ff\u0501\u0503\u0505\u0507\u0509\u050b\u050d\u050f\u0511\u0513\u0561-\u0587\u1d00-\u1d2b\u1d62-\u1d77\u1d79-\u1d9a\u1e01\u1e03\u1e05\u1e07\u1e09\u1e0b\u1e0d\u1e0f\u1e11\u1e13\u1e15\u1e17\u1e19\u1e1b\u1e1d\u1e1f\u1e21\u1e23\u1e25\u1e27\u1e29\u1e2b\u1e2d\u1e2f\u1e31\u1e33\u1e35\u1e37\u1e39\u1e3b\u1e3d\u1e3f\u1e41\u1e43\u1e45\u1e47\u1e49\u1e4b\u1e4d\u1e4f\u1e51\u1e53\u1e55\u1e57\u1e59\u1e5b\u1e5d\u1e5f\u1e61\u1e63\u1e65\u1e67\u1e69\u1e6b\u1e6d\u1e6f\u1e71\u1e73\u1e75\u1e77\u1e79\u1e7b\u1e7d\u1e7f\u1e81\u1e83\u1e85\u1e87\u1e89\u1e8b\u1e8d\u1e8f\u1e91\u1e93\u1e95-\u1e9b\u1ea1\u1ea3\u1ea5\u1ea7\u1ea9\u1eab\u1ead\u1eaf\u1eb1\u1eb3\u1eb5\u1eb7\u1eb9\u1ebb\u1ebd\u1ebf\u1ec1\u1ec3\u1ec5\u1ec7\u1ec9\u1ecb\u1ecd\u1ecf\u1ed1\u1ed3\u1ed5\u1ed7\u1ed9\u1edb\u1edd\u1edf\u1ee1\u1ee3\u1ee5\u1ee7\u1ee9\u1eeb\u1eed\u1eef\u1ef1\u1ef3\u1ef5\u1ef7\u1ef9\u1f00-\u1f07\u1f10-\u1f15\u1f20-\u1f27\u1f30-\u1f37\u1f40-\u1f45\u1f50-\u1f57\u1f60-\u1f67\u1f70-\u1f7d\u1f80-\u1f87\u1f90-\u1f97\u1fa0-\u1fa7\u1fb0-\u1fb4\u1fb6\u1fb7\u1fbe\u1fc2-\u1fc4\u1fc6\u1fc7\u1fd0-\u1fd3\u1fd6\u1fd7\u1fe0-\u1fe7\u1ff2-\u1ff4\u1ff6\u1ff7\u2071\u207f\u210a\u210e\u210f\u2113\u212f\u2134\u2139\u213c\u213d\u2146-\u2149\u214e\u2184\u2c30-\u2c5e\u2c61\u2c65\u2c66\u2c68\u2c6a\u2c6c\u2c74\u2c76\u2c77\u2c81\u2c83\u2c85\u2c87\u2c89\u2c8b\u2c8d\u2c8f\u2c91\u2c93\u2c95\u2c97\u2c99\u2c9b\u2c9d\u2c9f\u2ca1\u2ca3\u2ca5\u2ca7\u2ca9\u2cab\u2cad\u2caf\u2cb1\u2cb3\u2cb5\u2cb7\u2cb9\u2cbb\u2cbd\u2cbf\u2cc1\u2cc3\u2cc5\u2cc7\u2cc9\u2ccb\u2ccd\u2ccf\u2cd1\u2cd3\u2cd5\u2cd7\u2cd9\u2cdb\u2cdd\u2cdf\u2ce1\u2ce3\u2ce4\u2d00-\u2d25\ufb00-\ufb06\ufb13-\ufb17\uff41-\uff5a]',
		Lm:'[\u02b0-\u02c1\u02c6-\u02d1\u02e0-\u02e4\u02ee\u037a\u0559\u0640\u06e5\u06e6\u07f4\u07f5\u07fa\u0e46\u0ec6\u10fc\u17d7\u1843\u1d2c-\u1d61\u1d78\u1d9b-\u1dbf\u2090-\u2094\u2d6f\u3005\u3031-\u3035\u303b\u309d\u309e\u30fc-\u30fe\ua015\ua717-\ua71a\uff70\uff9e\uff9f]',
		Lo:'[\u01bb\u01c0-\u01c3\u0294\u05d0-\u05ea\u05f0-\u05f2\u0621-\u063a\u0641-\u064a\u066e\u066f\u0671-\u06d3\u06d5\u06ee\u06ef\u06fa-\u06fc\u06ff\u0710\u0712-\u072f\u074d-\u076d\u0780-\u07a5\u07b1\u07ca-\u07ea\u0904-\u0939\u093d\u0950\u0958-\u0961\u097b-\u097f\u0985-\u098c\u098f\u0990\u0993-\u09a8\u09aa-\u09b0\u09b2\u09b6-\u09b9\u09bd\u09ce\u09dc\u09dd\u09df-\u09e1\u09f0\u09f1\u0a05-\u0a0a\u0a0f\u0a10\u0a13-\u0a28\u0a2a-\u0a30\u0a32\u0a33\u0a35\u0a36\u0a38\u0a39\u0a59-\u0a5c\u0a5e\u0a72-\u0a74\u0a85-\u0a8d\u0a8f-\u0a91\u0a93-\u0aa8\u0aaa-\u0ab0\u0ab2\u0ab3\u0ab5-\u0ab9\u0abd\u0ad0\u0ae0\u0ae1\u0b05-\u0b0c\u0b0f\u0b10\u0b13-\u0b28\u0b2a-\u0b30\u0b32\u0b33\u0b35-\u0b39\u0b3d\u0b5c\u0b5d\u0b5f-\u0b61\u0b71\u0b83\u0b85-\u0b8a\u0b8e-\u0b90\u0b92-\u0b95\u0b99\u0b9a\u0b9c\u0b9e\u0b9f\u0ba3\u0ba4\u0ba8-\u0baa\u0bae-\u0bb9\u0c05-\u0c0c\u0c0e-\u0c10\u0c12-\u0c28\u0c2a-\u0c33\u0c35-\u0c39\u0c60\u0c61\u0c85-\u0c8c\u0c8e-\u0c90\u0c92-\u0ca8\u0caa-\u0cb3\u0cb5-\u0cb9\u0cbd\u0cde\u0ce0\u0ce1\u0d05-\u0d0c\u0d0e-\u0d10\u0d12-\u0d28\u0d2a-\u0d39\u0d60\u0d61\u0d85-\u0d96\u0d9a-\u0db1\u0db3-\u0dbb\u0dbd\u0dc0-\u0dc6\u0e01-\u0e30\u0e32\u0e33\u0e40-\u0e45\u0e81\u0e82\u0e84\u0e87\u0e88\u0e8a\u0e8d\u0e94-\u0e97\u0e99-\u0e9f\u0ea1-\u0ea3\u0ea5\u0ea7\u0eaa\u0eab\u0ead-\u0eb0\u0eb2\u0eb3\u0ebd\u0ec0-\u0ec4\u0edc\u0edd\u0f00\u0f40-\u0f47\u0f49-\u0f6a\u0f88-\u0f8b\u1000-\u1021\u1023-\u1027\u1029\u102a\u1050-\u1055\u10d0-\u10fa\u1100-\u1159\u115f-\u11a2\u11a8-\u11f9\u1200-\u1248\u124a-\u124d\u1250-\u1256\u1258\u125a-\u125d\u1260-\u1288\u128a-\u128d\u1290-\u12b0\u12b2-\u12b5\u12b8-\u12be\u12c0\u12c2-\u12c5\u12c8-\u12d6\u12d8-\u1310\u1312-\u1315\u1318-\u135a\u1380-\u138f\u13a0-\u13f4\u1401-\u166c\u166f-\u1676\u1681-\u169a\u16a0-\u16ea\u1700-\u170c\u170e-\u1711\u1720-\u1731\u1740-\u1751\u1760-\u176c\u176e-\u1770\u1780-\u17b3\u17dc\u1820-\u1842\u1844-\u1877\u1880-\u18a8\u1900-\u191c\u1950-\u196d\u1970-\u1974\u1980-\u19a9\u19c1-\u19c7\u1a00-\u1a16\u1b05-\u1b33\u1b45-\u1b4b\u2135-\u2138\u2d30-\u2d65\u2d80-\u2d96\u2da0-\u2da6\u2da8-\u2dae\u2db0-\u2db6\u2db8-\u2dbe\u2dc0-\u2dc6\u2dc8-\u2dce\u2dd0-\u2dd6\u2dd8-\u2dde\u3006\u303c\u3041-\u3096\u309f\u30a1-\u30fa\u30ff\u3105-\u312c\u3131-\u318e\u31a0-\u31b7\u31f0-\u31ff\u3400\u4db5\u4e00\u9fbb\ua000-\ua014\ua016-\ua48c\ua800\ua801\ua803-\ua805\ua807-\ua80a\ua80c-\ua822\ua840-\ua873\uac00\ud7a3\uf900-\ufa2d\ufa30-\ufa6a\ufa70-\ufad9\ufb1d\ufb1f-\ufb28\ufb2a-\ufb36\ufb38-\ufb3c\ufb3e\ufb40\ufb41\ufb43\ufb44\ufb46-\ufbb1\ufbd3-\ufd3d\ufd50-\ufd8f\ufd92-\ufdc7\ufdf0-\ufdfb\ufe70-\ufe74\ufe76-\ufefc\uff66-\uff6f\uff71-\uff9d\uffa0-\uffbe\uffc2-\uffc7\uffca-\uffcf\uffd2-\uffd7\uffda-\uffdc]',
		Co:'[\ue000\uf8ff]',
		Nd:'[\u0030-\u0039\u0660-\u0669\u06f0-\u06f9\u07c0-\u07c9\u0966-\u096f\u09e6-\u09ef\u0a66-\u0a6f\u0ae6-\u0aef\u0b66-\u0b6f\u0be6-\u0bef\u0c66-\u0c6f\u0ce6-\u0cef\u0d66-\u0d6f\u0e50-\u0e59\u0ed0-\u0ed9\u0f20-\u0f29\u1040-\u1049\u17e0-\u17e9\u1810-\u1819\u1946-\u194f\u19d0-\u19d9\u1b50-\u1b59\uff10-\uff19]',
		Lt:'[\u01c5\u01c8\u01cb\u01f2\u1f88-\u1f8f\u1f98-\u1f9f\u1fa8-\u1faf\u1fbc\u1fcc\u1ffc]',
		Lu:'[\u0041-\u005a\u00c0-\u00d6\u00d8-\u00de\u0100\u0102\u0104\u0106\u0108\u010a\u010c\u010e\u0110\u0112\u0114\u0116\u0118\u011a\u011c\u011e\u0120\u0122\u0124\u0126\u0128\u012a\u012c\u012e\u0130\u0132\u0134\u0136\u0139\u013b\u013d\u013f\u0141\u0143\u0145\u0147\u014a\u014c\u014e\u0150\u0152\u0154\u0156\u0158\u015a\u015c\u015e\u0160\u0162\u0164\u0166\u0168\u016a\u016c\u016e\u0170\u0172\u0174\u0176\u0178\u0179\u017b\u017d\u0181\u0182\u0184\u0186\u0187\u0189-\u018b\u018e-\u0191\u0193\u0194\u0196-\u0198\u019c\u019d\u019f\u01a0\u01a2\u01a4\u01a6\u01a7\u01a9\u01ac\u01ae\u01af\u01b1-\u01b3\u01b5\u01b7\u01b8\u01bc\u01c4\u01c7\u01ca\u01cd\u01cf\u01d1\u01d3\u01d5\u01d7\u01d9\u01db\u01de\u01e0\u01e2\u01e4\u01e6\u01e8\u01ea\u01ec\u01ee\u01f1\u01f4\u01f6-\u01f8\u01fa\u01fc\u01fe\u0200\u0202\u0204\u0206\u0208\u020a\u020c\u020e\u0210\u0212\u0214\u0216\u0218\u021a\u021c\u021e\u0220\u0222\u0224\u0226\u0228\u022a\u022c\u022e\u0230\u0232\u023a\u023b\u023d\u023e\u0241\u0243-\u0246\u0248\u024a\u024c\u024e\u0386\u0388-\u038a\u038c\u038e\u038f\u0391-\u03a1\u03a3-\u03ab\u03d2-\u03d4\u03d8\u03da\u03dc\u03de\u03e0\u03e2\u03e4\u03e6\u03e8\u03ea\u03ec\u03ee\u03f4\u03f7\u03f9\u03fa\u03fd-\u042f\u0460\u0462\u0464\u0466\u0468\u046a\u046c\u046e\u0470\u0472\u0474\u0476\u0478\u047a\u047c\u047e\u0480\u048a\u048c\u048e\u0490\u0492\u0494\u0496\u0498\u049a\u049c\u049e\u04a0\u04a2\u04a4\u04a6\u04a8\u04aa\u04ac\u04ae\u04b0\u04b2\u04b4\u04b6\u04b8\u04ba\u04bc\u04be\u04c0\u04c1\u04c3\u04c5\u04c7\u04c9\u04cb\u04cd\u04d0\u04d2\u04d4\u04d6\u04d8\u04da\u04dc\u04de\u04e0\u04e2\u04e4\u04e6\u04e8\u04ea\u04ec\u04ee\u04f0\u04f2\u04f4\u04f6\u04f8\u04fa\u04fc\u04fe\u0500\u0502\u0504\u0506\u0508\u050a\u050c\u050e\u0510\u0512\u0531-\u0556\u10a0-\u10c5\u1e00\u1e02\u1e04\u1e06\u1e08\u1e0a\u1e0c\u1e0e\u1e10\u1e12\u1e14\u1e16\u1e18\u1e1a\u1e1c\u1e1e\u1e20\u1e22\u1e24\u1e26\u1e28\u1e2a\u1e2c\u1e2e\u1e30\u1e32\u1e34\u1e36\u1e38\u1e3a\u1e3c\u1e3e\u1e40\u1e42\u1e44\u1e46\u1e48\u1e4a\u1e4c\u1e4e\u1e50\u1e52\u1e54\u1e56\u1e58\u1e5a\u1e5c\u1e5e\u1e60\u1e62\u1e64\u1e66\u1e68\u1e6a\u1e6c\u1e6e\u1e70\u1e72\u1e74\u1e76\u1e78\u1e7a\u1e7c\u1e7e\u1e80\u1e82\u1e84\u1e86\u1e88\u1e8a\u1e8c\u1e8e\u1e90\u1e92\u1e94\u1ea0\u1ea2\u1ea4\u1ea6\u1ea8\u1eaa\u1eac\u1eae\u1eb0\u1eb2\u1eb4\u1eb6\u1eb8\u1eba\u1ebc\u1ebe\u1ec0\u1ec2\u1ec4\u1ec6\u1ec8\u1eca\u1ecc\u1ece\u1ed0\u1ed2\u1ed4\u1ed6\u1ed8\u1eda\u1edc\u1ede\u1ee0\u1ee2\u1ee4\u1ee6\u1ee8\u1eea\u1eec\u1eee\u1ef0\u1ef2\u1ef4\u1ef6\u1ef8\u1f08-\u1f0f\u1f18-\u1f1d\u1f28-\u1f2f\u1f38-\u1f3f\u1f48-\u1f4d\u1f59\u1f5b\u1f5d\u1f5f\u1f68-\u1f6f\u1fb8-\u1fbb\u1fc8-\u1fcb\u1fd8-\u1fdb\u1fe8-\u1fec\u1ff8-\u1ffb\u2102\u2107\u210b-\u210d\u2110-\u2112\u2115\u2119-\u211d\u2124\u2126\u2128\u212a-\u212d\u2130-\u2133\u213e\u213f\u2145\u2183\u2c00-\u2c2e\u2c60\u2c62-\u2c64\u2c67\u2c69\u2c6b\u2c75\u2c80\u2c82\u2c84\u2c86\u2c88\u2c8a\u2c8c\u2c8e\u2c90\u2c92\u2c94\u2c96\u2c98\u2c9a\u2c9c\u2c9e\u2ca0\u2ca2\u2ca4\u2ca6\u2ca8\u2caa\u2cac\u2cae\u2cb0\u2cb2\u2cb4\u2cb6\u2cb8\u2cba\u2cbc\u2cbe\u2cc0\u2cc2\u2cc4\u2cc6\u2cc8\u2cca\u2ccc\u2cce\u2cd0\u2cd2\u2cd4\u2cd6\u2cd8\u2cda\u2cdc\u2cde\u2ce0\u2ce2\uff21-\uff3a]',
		Cs:'[\ud800\udb7f\udb80\udbff\udc00\udfff]',
		Zl:'[\u2028]',
		Nl:'[\u16ee-\u16f0\u2160-\u2182\u3007\u3021-\u3029\u3038-\u303a]',
		Zp:'[\u2029]',
		No:'[\u00b2\u00b3\u00b9\u00bc-\u00be\u09f4-\u09f9\u0bf0-\u0bf2\u0f2a-\u0f33\u1369-\u137c\u17f0-\u17f9\u2070\u2074-\u2079\u2080-\u2089\u2153-\u215f\u2460-\u249b\u24ea-\u24ff\u2776-\u2793\u2cfd\u3192-\u3195\u3220-\u3229\u3251-\u325f\u3280-\u3289\u32b1-\u32bf]',
		Zs:'[\u0020\u00a0\u1680\u180e\u2000-\u200a\u202f\u205f\u3000]',
		Sc:'[\u0024\u00a2-\u00a5\u060b\u09f2\u09f3\u0af1\u0bf9\u0e3f\u17db\u20a0-\u20b5\ufdfc\ufe69\uff04\uffe0\uffe1\uffe5\uffe6]',
		Pc:'[\u005f\u203f\u2040\u2054\ufe33\ufe34\ufe4d-\ufe4f\uff3f]',
		Pd:'[\u002d\u058a\u1806\u2010-\u2015\u2e17\u301c\u3030\u30a0\ufe31\ufe32\ufe58\ufe63\uff0d]',
		Pe:'[\u0029\u005d\u007d\u0f3b\u0f3d\u169c\u2046\u207e\u208e\u232a\u2769\u276b\u276d\u276f\u2771\u2773\u2775\u27c6\u27e7\u27e9\u27eb\u2984\u2986\u2988\u298a\u298c\u298e\u2990\u2992\u2994\u2996\u2998\u29d9\u29db\u29fd\u3009\u300b\u300d\u300f\u3011\u3015\u3017\u3019\u301b\u301e\u301f\ufd3f\ufe18\ufe36\ufe38\ufe3a\ufe3c\ufe3e\ufe40\ufe42\ufe44\ufe48\ufe5a\ufe5c\ufe5e\uff09\uff3d\uff5d\uff60\uff63]',
		Pf:'[\u00bb\u2019\u201d\u203a\u2e03\u2e05\u2e0a\u2e0d\u2e1d]',
		Me:'[\u0488\u0489\u06de\u20dd-\u20e0\u20e2-\u20e4]',
		Mc:'[\u0903\u093e-\u0940\u0949-\u094c\u0982\u0983\u09be-\u09c0\u09c7\u09c8\u09cb\u09cc\u09d7\u0a03\u0a3e-\u0a40\u0a83\u0abe-\u0ac0\u0ac9\u0acb\u0acc\u0b02\u0b03\u0b3e\u0b40\u0b47\u0b48\u0b4b\u0b4c\u0b57\u0bbe\u0bbf\u0bc1\u0bc2\u0bc6-\u0bc8\u0bca-\u0bcc\u0bd7\u0c01-\u0c03\u0c41-\u0c44\u0c82\u0c83\u0cbe\u0cc0-\u0cc4\u0cc7\u0cc8\u0cca\u0ccb\u0cd5\u0cd6\u0d02\u0d03\u0d3e-\u0d40\u0d46-\u0d48\u0d4a-\u0d4c\u0d57\u0d82\u0d83\u0dcf-\u0dd1\u0dd8-\u0ddf\u0df2\u0df3\u0f3e\u0f3f\u0f7f\u102c\u1031\u1038\u1056\u1057\u17b6\u17be-\u17c5\u17c7\u17c8\u1923-\u1926\u1929-\u192b\u1930\u1931\u1933-\u1938\u19b0-\u19c0\u19c8\u19c9\u1a19-\u1a1b\u1b04\u1b35\u1b3b\u1b3d-\u1b41\u1b43\u1b44\ua802\ua823\ua824\ua827]'
	};
	/* Also supports the general category (only the first letter) */
	var firstLetters = {};
	for (var p in unicodeCategories)
	{
		if (firstLetters[p[0]])
			firstLetters[p[0]] = unicodeCategories[p].substring(0,unicodeCategories[p].length-1) + firstLetters[p[0]].substring(1);
		else
			firstLetters[p[0]] = unicodeCategories[p];
	}
	for (var p in firstLetters)
		unicodeCategories[p] = firstLetters[p];

	/* Gets a regex written in a dialect that supports unicode categories and
	   translates it to a dialect supported by JavaScript. */
	return function(regexpString, classes)
	{
		var modifiers = "";
		if ( regexpString instanceof RegExp ) {
			modifiers = (regexpString.global ? "g" : "") +
						(regexpString.ignoreCase ? "i" : "") +
						(regexpString.multiline ? "m" : "");
			regexpString = regexpString.source;
		}
		regexpString = regexpString.replace(/\\p\{(..?)\}/g, function(match,group) {
		var unicode_categorie = unicodeCategories[group];
		if (!classes)
			unicode_category = unicode_categorie.replace(/\[(.*?)\]/g,"$1")
			return unicode_category || match;
		});
		return new RegExp(regexpString,modifiers);
	};

})();

//validate isName
$.formUtils.addValidator({
    name: 'isName',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^((?!http|www).)[^0-9!\[\]<>,;?=+()@#"°{}_$%:\/\\\*\^]*$/;

        if (value.trim() == ''){
            return false;
        }

        return reg.test(value);
    },
    errorMessage: 'This is not a valid name.',
    errorMessageKey: 'errorIsName'
});

//validate isGenericName
$.formUtils.addValidator({
    name: 'isGenericName',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[^<>={}]+$/;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid.',
    errorMessageKey: 'errorGlobal'
});

//validate isEmail
$.formUtils.addValidator({
    name: 'isEmail',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        //var reg = unicode_hack(/^[a-z\p{L}0-9!#$%&'*+\/=?^`{}|~_-]+[.a-z\p{L}0-9!#$%&'*+\/=?^`{}|~_-]*@[a-z\p{L}0-9]+[._a-z\p{L}0-9-]*\.[a-z\p{L}0-9]+$/i, false);

        //Old Regular Phrase
        //var reg = new RegExp(/^\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
        var reg = new RegExp(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i);
        return reg.test(value);
    },
    errorMessage: 'This is not a valid email address.',
    errorMessageKey: 'errorIsEmail'
});

//validate isPostCode
$.formUtils.addValidator({
    name: 'isPostCode',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var id_country = 0;
        if ($form.find('[data-field-name="id_country"]').length > 0) {
            id_country = $form.find('[data-field-name="id_country"]').val();
        }

        if ($.isEmpty(id_country)) {
            return false;
        }
        
        var pattern = countriesNeedZipCode[id_country];

        if (typeof (pattern) == 'undefined' || pattern.length == 0)
            pattern = '[a-z 0-9-]+';
        else
        {
            var format = pattern;
            format = format.replace(/N/g, '0');
            format = format.replace(/L/g, 'A');
            format = format.replace(/C/g, countriesIsoCode[id_country]);
            language.errorIsPostCode = messageValidate.errorIsPostCode + ' (<b>ex: ' + format + '</b>)';

            var replacements = {
                ' ': '( |)',
                '-': '(-|)',
                'N': '[0-9]',
                'L': '[a-zA-Z]',
                'C': countriesIsoCode[id_country],
            };

            if (value == format){
                return false;
            }

            for (var new_value in replacements)
                pattern = pattern.split(new_value).join(replacements[new_value]);
        }

        var reg = new RegExp('^' + pattern + '$', 'i');

        return reg.test(value);
    },
    errorMessage: 'This is not a valid post code.',
    errorMessageKey: 'errorIsPostCode'
});

//validate isAddress
$.formUtils.addValidator({
    name: 'isAddress',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[^!<>?=+@{}_$%]+$/;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid address.',
    errorMessageKey: 'errorIsAddress'
});

//validate isCityName
$.formUtils.addValidator({
    name: 'isCityName',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[^!<>;?=+@#"°{}_$%]+$/;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid city.',
    errorMessageKey: 'errorIsCityName'
});

//validate isPhoneNumber
$.formUtils.addValidator({
    name: 'isPhoneNumber',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[+0-9. ()-]+$/;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid phone.',
    errorMessageKey: 'errorIsPhoneNumber'
});

//validate isDniLite
$.formUtils.addValidator({
    name: 'isDniLite',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[0-9a-z-.]{1,16}$/i;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid document identifier.',
    errorMessageKey: 'errorIsDniLite'
});

//validate isValidIdByCountry
$.formUtils.addValidator({
    name: 'isValidIdByCountry',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        'use strict';

        var add_iso_code_dni = false;
        var iso_code_country = '';
        if ($el.hasClass('delivery')) {
            if ($('#onepagecheckoutps_step_one #delivery_id_country').length > 0) {
                iso_code_country = $('#onepagecheckoutps_step_one #delivery_id_country option:selected').data('iso-code');
            } else {
                iso_code_country = OnePageCheckoutPS.iso_code_country_delivery_default;
            }

            add_iso_code_dni = OnePageCheckoutPS.CONFIGS.OPC_INSERT_ISO_CODE_IN_DELIV_DNI;
        } else {
            if ($('#onepagecheckoutps_step_one #invoice_id_country').length > 0) {
                iso_code_country = $('#onepagecheckoutps_step_one #invoice_id_country option:selected').data('iso-code');
            } else {
                iso_code_country = OnePageCheckoutPS.iso_code_country_invoice_default;
            }

            add_iso_code_dni = OnePageCheckoutPS.CONFIGS.OPC_INSERT_ISO_CODE_IN_INVOI_DNI;
        }

        switch (iso_code_country) {
            case 'ES':
                var DNI_REGEX = /^(\d{8})([A-Z])$/;
                var CIF_REGEX = /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/;
                var NIE_REGEX = /^[XYZ]\d{7,8}[A-Z]$/;

                var ValidateSpanishID = function( str ) {
                    if (add_iso_code_dni) {
                        str = str.substr(2);
                    }
                    // Ensure upcase and remove whitespace
                    str = str.toUpperCase().replace(/\s/, '');

                    var valid = false;
                    var type = spainIdType( str );

                    switch (type) {
                        case 'dni':
                            valid = validDNI( str );
                            break;
                        case 'nie':
                            valid = validNIE( str );
                            break;
                        case 'cif':
                            valid = validCIF( str );
                            break;
                    }

                    return {
                        type: type,
                        valid: valid
                    };
                };

                var spainIdType = function( str ) {
                    if ( str.match( DNI_REGEX ) ) {
                        return 'dni';
                    }
                    if ( str.match( CIF_REGEX ) ) {
                        return 'cif';
                    }
                    if ( str.match( NIE_REGEX ) ) {
                        return 'nie';
                    }
                };

                var validDNI = function( dni ) {
                    var dni_letters = "TRWAGMYFPDXBNJZSQVHLCKE";
                    var letter = dni_letters.charAt( parseInt( dni, 10 ) % 23 );

                    return letter == dni.charAt(8);
                };

                var validNIE = function( nie ) {
                    // Change the initial letter for the corresponding number and validate as DNI
                    var nie_prefix = nie.charAt( 0 );

                    switch (nie_prefix) {
                        case 'X': nie_prefix = 0; break;
                        case 'Y': nie_prefix = 1; break;
                        case 'Z': nie_prefix = 2; break;
                    }

                    return validDNI( nie_prefix + nie.substr(1) );
                };

                var validCIF = function( cif ) {
                    var match = cif.match( CIF_REGEX );
                    var letter  = match[1],
                        number  = match[2],
                        control = match[3];

                    var even_sum = 0;
                    var odd_sum = 0;
                    var last_digit = 0;
                    var n;

                    for ( var i = 0; i < number.length; i++) {
                        n = parseInt( number.charAt(i), 10 );

                        // Odd positions (Even index equals to odd position. i=0 equals first position)
                        if ( i % 2 === 0 ) {
                            // Odd positions are multiplied first.
                            n *= 2;
                            // If the multiplication is bigger than 10 we need to adjust
                            odd_sum += n < 10 ? n : n - 9;
                        // Even positions
                        // Just sum them
                        } else {
                            even_sum += n;
                        }
                    }

                    last_digit = parseInt((even_sum + odd_sum).toString().slice(-1), 10);

                    var control_digit = last_digit != 0 ? (10 - last_digit ) : last_digit;
                    var control_letter = 'JABCDEFGHI'.substr( control_digit, 1 );

                    // Control must be a digit
                    if ( letter.match( /[ABEH]/ ) ) {
                        return control == control_digit;
                    // Control must be a letter
                    } else if ( letter.match( /[KPQS]/ ) ) {
                        return control == control_letter;
                    // Can be either
                    } else {
                        return control == control_digit || control == control_letter;
                    }
                };

                return ValidateSpanishID(value).valid;
            break;
            case 'CL':
                var validaRut = function (campo){
                    if (add_iso_code_dni) {
                        campo = campo.substr(2);
                    }

                    if (campo.length == 0){
                        return false;
                    }
                    if (campo.length < 8){
                        return false;
                    }
                    campo = campo.replace('-','');
                    campo = campo.replace(/\./g,'');
                    var suma = 0;
                    var caracteres = "1234567890kK";
                    var contador = 0;
                    for (var i=0; i < campo.length; i++){
                        var u = campo.substring(i, i + 1);
                        if (caracteres.indexOf(u) != -1) {
                            contador ++;
                        }
                    }
                    if (contador == 0) {
                        return false;
                    }
                    var rut = campo.substring(0, campo.length-1)
                    var drut = campo.substring(campo.length-1);
                    var dvr = '0';
                    var mul = 2;
                    for (i= rut.length -1 ; i >= 0; i--) {
                        suma = suma + rut.charAt(i) * mul;
                        if (mul == 7) {
                            mul = 2;
                        } else {
                            mul++;
                        }
                    }
                    var res = suma % 11;
                    if (res==1) {
                        dvr = 'k';
                    } else if (res==0) {
                        dvr = '0';
                    } else {
                        var dvi = 11-res;
                        dvr = dvi + "";
                    }
                    if ( dvr != drut.toLowerCase() ) {
                        return false;
                    } else {
                        return true;
                    }
                }

                return  validaRut(value);
            break;
        }

        return true;
    },
    errorMessage: 'This is not a valid document identifier.',
    errorMessageKey: 'errorIsDniLite'
});

//validate isMessage
$.formUtils.addValidator({
    name: 'isMessage',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var reg = /^[^<>{}]+$/;
        return reg.test(value);
    },
    errorMessage: 'This is not a valid message.',
    errorMessageKey: 'errorIsMessage'
});

//validate isPasswd
$.formUtils.addValidator({
    name: 'isPasswd',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        return (value.length >= 5 && value.length < 255);
    },
    errorMessage: 'This is not a valid password. Minimum 5 characters.',
    errorMessageKey: 'errorIsPasswd'
});

//validate isBirthDate
$.formUtils.addValidator({
    name: 'isBirthDate',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
		var year;
        var month;
        var day;
        var date_format = OnePageCheckoutPS.date_format_language.split('/');
        var date_value = value.split('/');

        if (date_format.length == 1)
            date_format = OnePageCheckoutPS.date_format_language.split('-');
        if (date_value.length == 1)
            date_value = value.split('-');

        if (date_format.length == 1)
            date_format = OnePageCheckoutPS.date_format_language.split('.');
        if (date_value.length == 1)
            date_value = value.split('.');

        for(i=0;i<3;i++){
            if (date_format[i] == 'dd')
                day = date_value[i];
            if (date_format[i] == 'mm')
                month = date_value[i];
            if (date_format[i] == 'yy')
                year = date_value[i];
        }

        var timestamp = new Date(year, month, day);

		if (!isNaN(timestamp))
			return true;
        return false;
    },
    errorMessage: 'This is not a valid birthdate.',
    errorMessageKey: 'errorisBirthDate'
});

//validate isDate
$.formUtils.addValidator({
    name: 'isDate',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var year;
        var month;
        var day;
        var date_format = OnePageCheckoutPS.date_format_language.split('/');
        var date_value = value.split('/');

        if (date_format.length == 1)
            date_format = OnePageCheckoutPS.date_format_language.split('-');
        if (date_value.length == 1)
            date_value = value.split('-');

        if (date_format.length == 1)
            date_format = OnePageCheckoutPS.date_format_language.split('.');
        if (date_value.length == 1)
            date_value = value.split('.');

        for(i=0;i<3;i++){
            if (date_format[i] == 'dd')
                day = date_value[i];
            if (date_format[i] == 'mm')
                month = date_value[i];
            if (date_format[i] == 'yy')
                year = date_value[i];
        }

        var timestamp = new Date(year, month, day);
		if (!isNaN(timestamp))
			return true;
        return false;
    },
    errorMessage: 'This is not a valid date.',
    errorMessageKey: 'errorisDate'
});

//validate isVatNumber
$.formUtils.addValidator({
    name: 'isVatNumber',
    validatorFunction: function (value, $el, config, language, $form, eventContext) {
        var result = true;

        if (eventContext == 'blur') {
            var id_country = null;
            if ($el.hasClass('delivery')) {
                var $id_country = $('div#onepagecheckoutps select#delivery_id_country');
            } else {
                var $id_country = $('div#onepagecheckoutps select#invoice_id_country');
            }

            if ($id_country.length > 0) {
                id_country = $id_country.val();
            } else {
                if ($el.hasClass('delivery')) {
                    id_country = OnePageCheckoutPS.id_country_delivery_default;
                } else {
                    id_country = OnePageCheckoutPS.id_country_invoice_default;
                }
            }

            var data = {
                url_call: (typeof orderOpcUrl !== typeof undefined ? orderOpcUrl : prestashop.urls.pages.order) + '?rand=' + new Date().getTime(),
                is_ajax: true,
                action: 'checkVATNumber',
                vat_number: value,
                id_country: id_country
            };

            var _json = {
                data: data,
                beforeSend: function(){
                    Fronted.loadingBig(true);
                },
                success: function(data) {
                    Fronted.loadingBig(false);

                    if (!$.isEmpty(data[0])){
                        Fronted.showModal({type:'error', message : data[0]});
                        result = false;
                        $el.val('').trigger('reset');
                    }
                },
                complete: function() {
                    if (result) {
                        Carrier.getByCountry();
                    }
                }
            };
            $.makeRequest(_json);
        }

        return result;
    },
    errorMessage: 'This is not a valid.',
    errorMessageKey: 'errorGlobal'
});