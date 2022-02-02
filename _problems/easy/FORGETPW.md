---
{"category_name":"easy","problem_code":"FORGETPW","problem_name":"Forgot Password","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"stzgd","problem_tester":"shiplu","date_added":"9-05-2014","tags":{"0":"ad","1":"june14","2":"simple","3":"stzgd"},"editorial_url":"http://discuss.codechef.com/problems/FORGETPW","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/FORGETPW.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/FORGETPW.pdf">Russian</a>.</h3>
<p>Chef changed the password of his laptop a few days ago, but he can't remember it today. Luckily, he wrote the encrypted password on a piece of paper, along with the rules for decryption.</p>
<p>The encrypted password is a string <b>S</b> consists of ASCII printable characters except space (ASCII 33 - 126, in decimal notation, the same below). Read here for more details: <a title="ASCII printable characters" href="http://en.wikipedia.org/wiki/Printable_characters#ASCII_printable_characters">ASCII printable characters</a>.</p>
<p>Each rule contains a pair of characters <b>c<sub>i</sub></b>, <b>p<sub>i</sub></b>, denoting that every character <b>c<sub>i</sub></b> appears in the encrypted password should be replaced with <b>p<sub>i</sub></b>. Notice that it is not allowed to do multiple replacements on a single position, see <b>example case 1</b> for clarification.</p>
<p>After all the character replacements, the string is guaranteed to be a positive decimal number. The <b>shortest notation</b> of this number is the real password. To get the shortest notation, we should delete all the unnecessary leading and trailing zeros. If the number contains only non-zero fractional part, the integral part should be omitted (the shortest notation of "0.5" is ".5"). If the number contains zero fractional part, the decimal point should be omitted as well (the shortest notation of "5.00" is "5").</p>
<p>Please help Chef to find the real password.</p>

<h3>Input</h3>
<p>The first line of the input contains an interger <b>T</b> denoting the number of test cases.<br />
The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single interger <b>N</b>, denoting the number of rules.</p>
<p>Each of the next <b>N</b> lines contains two space-separated characters <b>c<sub>i</sub></b> and <b>p<sub>i</sub></b>,<br />
denoting a rule.</p>
<p>The next line contains a string <b>S</b>, denoting the encrypted password.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the real password.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
<li>0 ≤ <b>N</b> ≤ 94</li>
<li>All characters in <b>S</b> and <b>c<sub>i</sub></b> may be any ASCII printable character except space. (ASCII 33 - 126)</li>
<li>All <b>c<sub>i</sub></b> in a single test case are distinct.</li>
<li><b>p<sub>i</sub></b> is a digit ("0" - "9") or a decimal point "." (ASCII 46).</li>
<li>The total length of <b>S</b> in a single input file will not exceed 10<sup>6</sup>.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
4
2
5 3
3 1
5
0
01800.00
0
0.00100
3
x 0
d 3
# .
0xd21#dd098x

<b>Output:</b>
3
1800
.001
321.33098
</pre>
