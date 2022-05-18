<?php
/**
 * @author: Viskov Sergey
 * @date: 3/18/16
 * @time: 11:18 AM
 */

namespace LTDBeget\ascii;


use MabeEnum\Enum;

/**
 * Class AsciiChar
 * @package LTDBeget\ascii
 *
 * @method static AsciiChar NULL()
 * @method static AsciiChar HEADING_START()
 * @method static AsciiChar TEXT_START()
 * @method static AsciiChar TEXT_END()
 * @method static AsciiChar TRANSMISSION_END()
 * @method static AsciiChar ENQUIRY()
 * @method static AsciiChar ACKNOWLEDGMENT()
 * @method static AsciiChar BELL()
 * @method static AsciiChar BACKSPACE()
 * @method static AsciiChar HORIZONTAL_TAB()
 * @method static AsciiChar LINE_FEED()
 * @method static AsciiChar VERTICAL_TAB()
 * @method static AsciiChar FORM_FEED()
 * @method static AsciiChar CARRIAGE_RETURN()
 * @method static AsciiChar SHIFT_OUT()
 * @method static AsciiChar SHIFT_IN()
 * @method static AsciiChar DATA_LINE_ESCAPE()
 * @method static AsciiChar DEVICE_CONTROL_1()
 * @method static AsciiChar DEVICE_CONTROL_2()
 * @method static AsciiChar DEVICE_CONTROL_3()
 * @method static AsciiChar DEVICE_CONTROL_4()
 * @method static AsciiChar NEGATIVE_ACKNOWLEDGEMENT()
 * @method static AsciiChar SYNCHRONOUS_IDLE()
 * @method static AsciiChar TRANSMIT_BLOCK_END()
 * @method static AsciiChar CANCEL()
 * @method static AsciiChar MEDIUM_END()
 * @method static AsciiChar SUBSTITUTE()
 * @method static AsciiChar ESCAPE()
 * @method static AsciiChar FILE_SEPARATOR()
 * @method static AsciiChar GROUP_SEPARATOR()
 * @method static AsciiChar RECORD_SEPARATOR()
 * @method static AsciiChar UNIT_SEPARATOR()
 * @method static AsciiChar SPACE()
 * @method static AsciiChar EXCLAMATION_MARK()
 * @method static AsciiChar DOUBLE_QUOTES()
 * @method static AsciiChar HASHTAG()
 * @method static AsciiChar DOLLAR()
 * @method static AsciiChar PROCENTTECKEN()
 * @method static AsciiChar AMPERSAND()
 * @method static AsciiChar SINGLE_QUOTE()
 * @method static AsciiChar OPEN_BRACKET()
 * @method static AsciiChar CLOSE_BRACKET()
 * @method static AsciiChar ASTERISK()
 * @method static AsciiChar PLUS()
 * @method static AsciiChar COMMA()
 * @method static AsciiChar HYPHEN()
 * @method static AsciiChar DOT()
 * @method static AsciiChar SLASH()
 * @method static AsciiChar ZERO()
 * @method static AsciiChar ONE()
 * @method static AsciiChar TWO()
 * @method static AsciiChar THREE()
 * @method static AsciiChar FOUR()
 * @method static AsciiChar FIVE()
 * @method static AsciiChar SIX()
 * @method static AsciiChar SEVEN()
 * @method static AsciiChar EIGHT()
 * @method static AsciiChar NINE()
 * @method static AsciiChar COLON()
 * @method static AsciiChar SEMICOLON()
 * @method static AsciiChar LESS_THAN()
 * @method static AsciiChar EQUALS()
 * @method static AsciiChar GREATER_THAN()
 * @method static AsciiChar QUESTION_MARK()
 * @method static AsciiChar AT_SYMBOL()
 * @method static AsciiChar A_UPPERCASE()
 * @method static AsciiChar B_UPPERCASE()
 * @method static AsciiChar C_UPPERCASE()
 * @method static AsciiChar D_UPPERCASE()
 * @method static AsciiChar E_UPPERCASE()
 * @method static AsciiChar F_UPPERCASE()
 * @method static AsciiChar G_UPPERCASE()
 * @method static AsciiChar H_UPPERCASE()
 * @method static AsciiChar I_UPPERCASE()
 * @method static AsciiChar J_UPPERCASE()
 * @method static AsciiChar K_UPPERCASE()
 * @method static AsciiChar L_UPPERCASE()
 * @method static AsciiChar M_UPPERCASE()
 * @method static AsciiChar N_UPPERCASE()
 * @method static AsciiChar O_UPPERCASE()
 * @method static AsciiChar P_UPPERCASE()
 * @method static AsciiChar Q_UPPERCASE()
 * @method static AsciiChar R_UPPERCASE()
 * @method static AsciiChar S_UPPERCASE()
 * @method static AsciiChar T_UPPERCASE()
 * @method static AsciiChar U_UPPERCASE()
 * @method static AsciiChar V_UPPERCASE()
 * @method static AsciiChar W_UPPERCASE()
 * @method static AsciiChar X_UPPERCASE()
 * @method static AsciiChar Y_UPPERCASE()
 * @method static AsciiChar Z_UPPERCASE()
 * @method static AsciiChar OPENING_BRACKET()
 * @method static AsciiChar BACKSLASH()
 * @method static AsciiChar CLOSING_BRACKET()
 * @method static AsciiChar CARET()
 * @method static AsciiChar UNDERSCORE()
 * @method static AsciiChar GRAVE_ACCENT()
 * @method static AsciiChar A_LOWERCASE()
 * @method static AsciiChar B_LOWERCASE()
 * @method static AsciiChar C_LOWERCASE()
 * @method static AsciiChar D_LOWERCASE()
 * @method static AsciiChar E_LOWERCASE()
 * @method static AsciiChar F_LOWERCASE()
 * @method static AsciiChar G_LOWERCASE()
 * @method static AsciiChar H_LOWERCASE()
 * @method static AsciiChar I_LOWERCASE()
 * @method static AsciiChar J_LOWERCASE()
 * @method static AsciiChar K_LOWERCASE()
 * @method static AsciiChar L_LOWERCASE()
 * @method static AsciiChar M_LOWERCASE()
 * @method static AsciiChar N_LOWERCASE()
 * @method static AsciiChar O_LOWERCASE()
 * @method static AsciiChar P_LOWERCASE()
 * @method static AsciiChar Q_LOWERCASE()
 * @method static AsciiChar R_LOWERCASE()
 * @method static AsciiChar S_LOWERCASE()
 * @method static AsciiChar T_LOWERCASE()
 * @method static AsciiChar U_LOWERCASE()
 * @method static AsciiChar V_LOWERCASE()
 * @method static AsciiChar W_LOWERCASE()
 * @method static AsciiChar X_LOWERCASE()
 * @method static AsciiChar Y_LOWERCASE()
 * @method static AsciiChar Z_LOWERCASE()
 * @method static AsciiChar OPENING_BRACE()
 * @method static AsciiChar VERTICAL_BAR()
 * @method static AsciiChar CLOSING_BRACE()
 * @method static AsciiChar TILDE()
 * @method static AsciiChar DELETE()
 * @method static AsciiChar CODE_128()
 * @method static AsciiChar CODE_129()
 * @method static AsciiChar CODE_130()
 * @method static AsciiChar CODE_131()
 * @method static AsciiChar CODE_132()
 * @method static AsciiChar CODE_133()
 * @method static AsciiChar CODE_134()
 * @method static AsciiChar CODE_135()
 * @method static AsciiChar CODE_136()
 * @method static AsciiChar CODE_137()
 * @method static AsciiChar CODE_138()
 * @method static AsciiChar CODE_139()
 * @method static AsciiChar CODE_140()
 * @method static AsciiChar CODE_141()
 * @method static AsciiChar CODE_142()
 * @method static AsciiChar CODE_143()
 * @method static AsciiChar CODE_144()
 * @method static AsciiChar CODE_145()
 * @method static AsciiChar CODE_146()
 * @method static AsciiChar CODE_147()
 * @method static AsciiChar CODE_148()
 * @method static AsciiChar CODE_149()
 * @method static AsciiChar CODE_150()
 * @method static AsciiChar CODE_151()
 * @method static AsciiChar CODE_152()
 * @method static AsciiChar CODE_153()
 * @method static AsciiChar CODE_154()
 * @method static AsciiChar CODE_155()
 * @method static AsciiChar CODE_156()
 * @method static AsciiChar CODE_157()
 * @method static AsciiChar CODE_158()
 * @method static AsciiChar CODE_159()
 * @method static AsciiChar CODE_160()
 * @method static AsciiChar CODE_161()
 * @method static AsciiChar CODE_162()
 * @method static AsciiChar CODE_163()
 * @method static AsciiChar CODE_164()
 * @method static AsciiChar CODE_165()
 * @method static AsciiChar CODE_166()
 * @method static AsciiChar CODE_167()
 * @method static AsciiChar CODE_168()
 * @method static AsciiChar CODE_169()
 * @method static AsciiChar CODE_170()
 * @method static AsciiChar CODE_171()
 * @method static AsciiChar CODE_172()
 * @method static AsciiChar CODE_173()
 * @method static AsciiChar CODE_174()
 * @method static AsciiChar CODE_175()
 * @method static AsciiChar CODE_176()
 * @method static AsciiChar CODE_177()
 * @method static AsciiChar CODE_178()
 * @method static AsciiChar CODE_179()
 * @method static AsciiChar CODE_180()
 * @method static AsciiChar CODE_181()
 * @method static AsciiChar CODE_182()
 * @method static AsciiChar CODE_183()
 * @method static AsciiChar CODE_184()
 * @method static AsciiChar CODE_185()
 * @method static AsciiChar CODE_186()
 * @method static AsciiChar CODE_187()
 * @method static AsciiChar CODE_188()
 * @method static AsciiChar CODE_189()
 * @method static AsciiChar CODE_190()
 * @method static AsciiChar CODE_191()
 * @method static AsciiChar CODE_192()
 * @method static AsciiChar CODE_193()
 * @method static AsciiChar CODE_194()
 * @method static AsciiChar CODE_195()
 * @method static AsciiChar CODE_196()
 * @method static AsciiChar CODE_197()
 * @method static AsciiChar CODE_198()
 * @method static AsciiChar CODE_199()
 * @method static AsciiChar CODE_200()
 * @method static AsciiChar CODE_201()
 * @method static AsciiChar CODE_202()
 * @method static AsciiChar CODE_203()
 * @method static AsciiChar CODE_204()
 * @method static AsciiChar CODE_205()
 * @method static AsciiChar CODE_206()
 * @method static AsciiChar CODE_207()
 * @method static AsciiChar CODE_208()
 * @method static AsciiChar CODE_209()
 * @method static AsciiChar CODE_210()
 * @method static AsciiChar CODE_211()
 * @method static AsciiChar CODE_212()
 * @method static AsciiChar CODE_213()
 * @method static AsciiChar CODE_214()
 * @method static AsciiChar CODE_215()
 * @method static AsciiChar CODE_216()
 * @method static AsciiChar CODE_217()
 * @method static AsciiChar CODE_218()
 * @method static AsciiChar CODE_219()
 * @method static AsciiChar CODE_220()
 * @method static AsciiChar CODE_221()
 * @method static AsciiChar CODE_222()
 * @method static AsciiChar CODE_223()
 * @method static AsciiChar CODE_224()
 * @method static AsciiChar CODE_225()
 * @method static AsciiChar CODE_226()
 * @method static AsciiChar CODE_227()
 * @method static AsciiChar CODE_228()
 * @method static AsciiChar CODE_229()
 * @method static AsciiChar CODE_230()
 * @method static AsciiChar CODE_231()
 * @method static AsciiChar CODE_232()
 * @method static AsciiChar CODE_233()
 * @method static AsciiChar CODE_234()
 * @method static AsciiChar CODE_235()
 * @method static AsciiChar CODE_236()
 * @method static AsciiChar CODE_237()
 * @method static AsciiChar CODE_238()
 * @method static AsciiChar CODE_239()
 * @method static AsciiChar CODE_240()
 * @method static AsciiChar CODE_241()
 * @method static AsciiChar CODE_242()
 * @method static AsciiChar CODE_243()
 * @method static AsciiChar CODE_244()
 * @method static AsciiChar CODE_245()
 * @method static AsciiChar CODE_246()
 * @method static AsciiChar CODE_247()
 * @method static AsciiChar CODE_248()
 * @method static AsciiChar CODE_249()
 * @method static AsciiChar CODE_250()
 * @method static AsciiChar CODE_251()
 * @method static AsciiChar CODE_252()
 * @method static AsciiChar CODE_253()
 * @method static AsciiChar CODE_254()
 * @method static AsciiChar CODE_255()
 */
class AsciiChar extends Enum
{
    const NULL                     = 0;
    const HEADING_START            = 1;
    const TEXT_START               = 2;
    const TEXT_END                 = 3;
    const TRANSMISSION_END         = 4;
    const ENQUIRY                  = 5;
    const ACKNOWLEDGMENT           = 6;
    const BELL                     = 7;
    const BACKSPACE                = 8;
    const HORIZONTAL_TAB           = 9;
    const LINE_FEED                = 10;
    const VERTICAL_TAB             = 11;
    const FORM_FEED                = 12;
    const CARRIAGE_RETURN          = 13;
    const SHIFT_OUT                = 14;
    const SHIFT_IN                 = 15;
    const DATA_LINE_ESCAPE         = 16;
    const DEVICE_CONTROL_1         = 17;
    const DEVICE_CONTROL_2         = 18;
    const DEVICE_CONTROL_3         = 19;
    const DEVICE_CONTROL_4         = 20;
    const NEGATIVE_ACKNOWLEDGEMENT = 21;
    const SYNCHRONOUS_IDLE         = 22;
    const TRANSMIT_BLOCK_END       = 23;
    const CANCEL                   = 24;
    const MEDIUM_END               = 25;
    const SUBSTITUTE               = 26;
    const ESCAPE                   = 27;
    const FILE_SEPARATOR           = 28;
    const GROUP_SEPARATOR          = 29;
    const RECORD_SEPARATOR         = 30;
    const UNIT_SEPARATOR           = 31;
    const SPACE                    = 32;
    const EXCLAMATION_MARK         = 33;
    const DOUBLE_QUOTES            = 34;
    const HASHTAG                  = 35;
    const DOLLAR                   = 36;
    const PROCENTTECKEN            = 37;
    const AMPERSAND                = 38;
    const SINGLE_QUOTE             = 39;
    const OPEN_BRACKET             = 40;
    const CLOSE_BRACKET            = 41;
    const ASTERISK                 = 42;
    const PLUS                     = 43;
    const COMMA                    = 44;
    const HYPHEN                   = 45;
    const DOT                      = 46;
    const SLASH                    = 47;
    const ZERO                     = 48;
    const ONE                      = 49;
    const TWO                      = 50;
    const THREE                    = 51;
    const FOUR                     = 52;
    const FIVE                     = 53;
    const SIX                      = 54;
    const SEVEN                    = 55;
    const EIGHT                    = 56;
    const NINE                     = 57;
    const COLON                    = 58;
    const SEMICOLON                = 59;
    const LESS_THAN                = 60;
    const EQUALS                   = 61;
    const GREATER_THAN             = 62;
    const QUESTION_MARK            = 63;
    const AT_SYMBOL                = 64;
    const A_UPPERCASE              = 65;
    const B_UPPERCASE              = 66;
    const C_UPPERCASE              = 67;
    const D_UPPERCASE              = 68;
    const E_UPPERCASE              = 69;
    const F_UPPERCASE              = 70;
    const G_UPPERCASE              = 71;
    const H_UPPERCASE              = 72;
    const I_UPPERCASE              = 73;
    const J_UPPERCASE              = 74;
    const K_UPPERCASE              = 75;
    const L_UPPERCASE              = 76;
    const M_UPPERCASE              = 77;
    const N_UPPERCASE              = 78;
    const O_UPPERCASE              = 79;
    const P_UPPERCASE              = 80;
    const Q_UPPERCASE              = 81;
    const R_UPPERCASE              = 82;
    const S_UPPERCASE              = 83;
    const T_UPPERCASE              = 84;
    const U_UPPERCASE              = 85;
    const V_UPPERCASE              = 86;
    const W_UPPERCASE              = 87;
    const X_UPPERCASE              = 88;
    const Y_UPPERCASE              = 89;
    const Z_UPPERCASE              = 90;
    const OPENING_BRACKET          = 91;
    const BACKSLASH                = 92;
    const CLOSING_BRACKET          = 93;
    const CARET                    = 94;
    const UNDERSCORE               = 95;
    const GRAVE_ACCENT             = 96;
    const A_LOWERCASE              = 97;
    const B_LOWERCASE              = 98;
    const C_LOWERCASE              = 99;
    const D_LOWERCASE              = 100;
    const E_LOWERCASE              = 101;
    const F_LOWERCASE              = 102;
    const G_LOWERCASE              = 103;
    const H_LOWERCASE              = 104;
    const I_LOWERCASE              = 105;
    const J_LOWERCASE              = 106;
    const K_LOWERCASE              = 107;
    const L_LOWERCASE              = 108;
    const M_LOWERCASE              = 109;
    const N_LOWERCASE              = 110;
    const O_LOWERCASE              = 111;
    const P_LOWERCASE              = 112;
    const Q_LOWERCASE              = 113;
    const R_LOWERCASE              = 114;
    const S_LOWERCASE              = 115;
    const T_LOWERCASE              = 116;
    const U_LOWERCASE              = 117;
    const V_LOWERCASE              = 118;
    const W_LOWERCASE              = 119;
    const X_LOWERCASE              = 120;
    const Y_LOWERCASE              = 121;
    const Z_LOWERCASE              = 122;
    const OPENING_BRACE            = 123;
    const VERTICAL_BAR             = 124;
    const CLOSING_BRACE            = 125;
    const TILDE                    = 126;
    const DELETE                   = 127;
    const CODE_128                 = 128;
    const CODE_129                 = 129;
    const CODE_130                 = 130;
    const CODE_131                 = 131;
    const CODE_132                 = 132;
    const CODE_133                 = 133;
    const CODE_134                 = 134;
    const CODE_135                 = 135;
    const CODE_136                 = 136;
    const CODE_137                 = 137;
    const CODE_138                 = 138;
    const CODE_139                 = 139;
    const CODE_140                 = 140;
    const CODE_141                 = 141;
    const CODE_142                 = 142;
    const CODE_143                 = 143;
    const CODE_144                 = 144;
    const CODE_145                 = 145;
    const CODE_146                 = 146;
    const CODE_147                 = 147;
    const CODE_148                 = 148;
    const CODE_149                 = 149;
    const CODE_150                 = 150;
    const CODE_151                 = 151;
    const CODE_152                 = 152;
    const CODE_153                 = 153;
    const CODE_154                 = 154;
    const CODE_155                 = 155;
    const CODE_156                 = 156;
    const CODE_157                 = 157;
    const CODE_158                 = 158;
    const CODE_159                 = 159;
    const CODE_160                 = 160;
    const CODE_161                 = 161;
    const CODE_162                 = 162;
    const CODE_163                 = 163;
    const CODE_164                 = 164;
    const CODE_165                 = 165;
    const CODE_166                 = 166;
    const CODE_167                 = 167;
    const CODE_168                 = 168;
    const CODE_169                 = 169;
    const CODE_170                 = 170;
    const CODE_171                 = 171;
    const CODE_172                 = 172;
    const CODE_173                 = 173;
    const CODE_174                 = 174;
    const CODE_175                 = 175;
    const CODE_176                 = 176;
    const CODE_177                 = 177;
    const CODE_178                 = 178;
    const CODE_179                 = 179;
    const CODE_180                 = 180;
    const CODE_181                 = 181;
    const CODE_182                 = 182;
    const CODE_183                 = 183;
    const CODE_184                 = 184;
    const CODE_185                 = 185;
    const CODE_186                 = 186;
    const CODE_187                 = 187;
    const CODE_188                 = 188;
    const CODE_189                 = 189;
    const CODE_190                 = 190;
    const CODE_191                 = 191;
    const CODE_192                 = 192;
    const CODE_193                 = 193;
    const CODE_194                 = 194;
    const CODE_195                 = 195;
    const CODE_196                 = 196;
    const CODE_197                 = 197;
    const CODE_198                 = 198;
    const CODE_199                 = 199;
    const CODE_200                 = 200;
    const CODE_201                 = 201;
    const CODE_202                 = 202;
    const CODE_203                 = 203;
    const CODE_204                 = 204;
    const CODE_205                 = 205;
    const CODE_206                 = 206;
    const CODE_207                 = 207;
    const CODE_208                 = 208;
    const CODE_209                 = 209;
    const CODE_210                 = 210;
    const CODE_211                 = 211;
    const CODE_212                 = 212;
    const CODE_213                 = 213;
    const CODE_214                 = 214;
    const CODE_215                 = 215;
    const CODE_216                 = 216;
    const CODE_217                 = 217;
    const CODE_218                 = 218;
    const CODE_219                 = 219;
    const CODE_220                 = 220;
    const CODE_221                 = 221;
    const CODE_222                 = 222;
    const CODE_223                 = 223;
    const CODE_224                 = 224;
    const CODE_225                 = 225;
    const CODE_226                 = 226;
    const CODE_227                 = 227;
    const CODE_228                 = 228;
    const CODE_229                 = 229;
    const CODE_230                 = 230;
    const CODE_231                 = 231;
    const CODE_232                 = 232;
    const CODE_233                 = 233;
    const CODE_234                 = 234;
    const CODE_235                 = 235;
    const CODE_236                 = 236;
    const CODE_237                 = 237;
    const CODE_238                 = 238;
    const CODE_239                 = 239;
    const CODE_240                 = 240;
    const CODE_241                 = 241;
    const CODE_242                 = 242;
    const CODE_243                 = 243;
    const CODE_244                 = 244;
    const CODE_245                 = 245;
    const CODE_246                 = 246;
    const CODE_247                 = 247;
    const CODE_248                 = 248;
    const CODE_249                 = 249;
    const CODE_250                 = 250;
    const CODE_251                 = 251;
    const CODE_252                 = 252;
    const CODE_253                 = 253;
    const CODE_254                 = 254;
    const CODE_255                 = 255;

    /**
     * @return bool
     */
    public function isControlChar() : bool
    {
        return $this->isControlChar ?? $this->isControlChar =
            ((($dec = $this->getValue()) >= AsciiChar::NULL && $dec <= AsciiChar::UNIT_SEPARATOR) || $dec === AsciiChar::DELETE);
    }

    /**
     * @return bool
     */
    public function isPrintableChar() : bool
    {
        return $this->isPrintableChar ?? $this->isPrintableChar =
            ((($dec = $this->getValue()) >= AsciiChar::SPACE && $dec <= AsciiChar::TILDE) || $dec >= AsciiChar::CODE_128);
    }

    /**
     * @return bool
     */
    public function isWhiteSpace() : bool
    {
        return $this->isWhiteSpace ?? $this->isWhiteSpace =
            ($this->isVerticalSpace() || $this->isHorizontalSpace());
    }

    /**
     * @return bool
     */
    public function isHorizontalSpace() : bool
    {
        return $this->isHorizontalSpace ?? $this->isHorizontalSpace =
            (($dec = $this->getValue()) === AsciiChar::SPACE || $dec === AsciiChar::HORIZONTAL_TAB);
    }

    /**
     * @return bool
     */
    public function isVerticalSpace() : bool
    {
        return $this->isVerticalSpace ?? $this->isVerticalSpace =
            (($dec = $this->getValue()) === AsciiChar::LINE_FEED || $dec === AsciiChar::CARRIAGE_RETURN ||
               $dec === AsciiChar::VERTICAL_TAB);
    }

    /**
     * @return bool
     */
    public function isLetter() : bool
    {
        return $this->isLetter ?? $this->isLetter =
            ((($dec = $this->getValue()) >= AsciiChar::A_UPPERCASE && $dec <= AsciiChar::Z_UPPERCASE) ||
               ($dec >= AsciiChar::A_LOWERCASE && $dec <= AsciiChar::Z_LOWERCASE));
    }

    /**
     * @return bool
     */
    public function isDigit() : bool
    {
        return $this->isDigit ?? $this->isDigit =
            (($dec = $this->getValue()) >= AsciiChar::ZERO && $dec <= AsciiChar::NINE);
    }

    /**
     * @return bool
     */
    public function isExtended() : bool
    {
        return $this->isExtended ?? $this->isExtended =
            $this->getValue() >= AsciiChar::CODE_128;
    }

    /**
     * @var bool
     */
    private $isControlChar;

    /**
     * @var bool
     */
    private $isPrintableChar;

    /**
     * @var bool
     */
    private $isWhiteSpace;

    /**
     * @var bool
     */
    private $isHorizontalSpace;

    /**
     * @var bool
     */
    private $isVerticalSpace;

    /**
     * @var bool
     */
    private $isLetter;

    /**
     * @var bool
     */
    private $isDigit;

    /**
     * @var bool
     */
    private $isExtended;
}
