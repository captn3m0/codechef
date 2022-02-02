---
{"category_name":"medium","problem_code":"TANDC","problem_name":"Tracy and Charlie","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"piyushkumar","problem_tester":null,"date_added":"20-04-2014","tags":{"0":"easy","1":"inverse","2":"ltime11","3":"math","4":"piyushkumar"},"editorial_url":"http://discuss.codechef.com/problems/TANDC","time":{"view_start_date":1398587400,"submit_start_date":1398587400,"visible_start_date":1398587400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/TANDC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/TANDC.pdf">Russian</a>.</h3>
<p>Tracy is teaching Charlie maths via a game called N-Cube, which involves three sections involving N. <br /></p>
<p>Tracy gives Charlie a number N, and Charlie makes a list of N<sup>th</sup> powers of integers in increasing order (1<sup>N</sup>, 2<sup>N</sup>, 3<sup>N</sup>.. so on). This teaches him exponentiation. <br /><br />
Then Charlie performs the following subtraction game N times : Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if N was 6, the list proceeds as [1, 64, 729, 4096 ... ] to [63, 685, 3367 ...], and so on 5 more times.<br /><br />
After the subtraction game, Charlie has to correctly tell Tracy the Nth element of the list. This number is the <i>value of the game</i>. <br /><br />
<br /><br />
After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers <b>M</b> (where M is a prime) and <b>R</b> instead of just a single number N, and the game must start from <b>M<sup>R</sup> - 1</b> instead of N. Since the <i>value of the game</i> can now become large, Charlie just have to tell the largest integer K such that M<sup> K </sup> divides this number. Since even K can be large, output K modulo 1000000007 (10<sup>9</sup>+7).<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line will contain <b>T</b>, number of testcases. Then the testcases follow<br /><br />
Each testcase contains of a single line of input, two integers <b>M R</b><br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output in a single line answer given by Charlie to Tracy modulo 1000000007.<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=1000<br /><br />
2&lt;=M&lt;=10<sup>9</sup><br /><br />
30 points : 1&lt;=R&lt;=10000<br /><br />
70 points : 1&lt;=R&lt;=10<sup>9</sup><br /><br />
M is a prime number<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
2 2<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
This list is :<br />
[1,8,27,64,125..] -> [7,19,37,61..] -> [12,18,24..] -> [6,6,6..]. Number of times 2 divides 6 is 1. Hence the answer is 1.</p>
