---
{"category_name":"easy","problem_code":"EZNO","problem_name":"Easy Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wwwwodddd","problem_tester":"kevinsogo","date_added":"14-05-2016","tags":{"0":"backtracking","1":"cook70","2":"easy","3":"enumeration","4":"pdn","5":"precomputation","6":"wwwwodddd"},"editorial_url":"http://discuss.codechef.com/problems/EZNO","time":{"view_start_date":1463941800,"submit_start_date":1463941800,"visible_start_date":1463941800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/mandarin/EZNO.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/russian/EZNO.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK70/vietnamese/EZNO.pdf">Vietnamese</a> as well.</h3>


<p>While studying representation of numbers in various bases, Chef discovered an interesting properties of some <i>positive</i> numbers, which Chef believed are somewhat easy to memorize. Chef called such <i>positive</i> numbers <i>easy</i> numbers.</p>

<p>These numbers had an interesting property: Let the base Chef is currently studying be <b>b</b>. Represent the number in base <b>b</b> (without leading zeros). For each prefix of length <b>k</b> (from 1 to number of digits in number in the base), the number formed by considering the digits of the prefix in base <b>b</b> is divisible by <b>k</b>.</p>

<p>
For example, let base Chef is studying be <b>2</b>. 
<ul>
<li>1 is an <i>easy</i> number as its prefix of length 1 (i.e. 1) is divisible by 1.</li>
<li>2 is also an <i>easy</i> number, as its prefix of length 1 (i.e. 1) is divisible by 1 and the prefix of length 2 (i.e. 2, represented as 10 in base 2) is also divisible by 2.</li>
<li>3 is not an <i>easy</i> number, as its prefix of length 2 (i.e. 3, represented as 11 in base 2) is not divisible by 2.</li>
</ul>
</p>

<p>
Now Chef finds these numbers easy and thinks that following question related to <i>easy</i> numbers will be easy for you too. He asks you to find the number of <i>easy</i> numbers represented in base <b>b</b> and consisting of exactly <b>d</b> digits. As the answer could be quite large, output it modulo <b>10<sup>9</sup> + 7</b>.
</p>

<h3>Input</h3>
<p>First line of the input contains a single integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, there will be a single line containing two space separated integers <b>b, d</b>, denoting the base and number of digits respectively.</p>

<h3>Output</h3>
For each test case, output a single integer denoting the number of <i>easy</i> numbers in base <b>b</b> consisting of <b>d</b> digits, modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>b</b> ≤ <b>16</b></li>
<li><b>1</b> ≤ <b>d</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
10 3

<b>Output:</b>
1
150
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There are 2 numbers in base 2 consisting of 2 digits. Those are 2 (represented as 10 in base 2) and 3 (represented as 11 in base 2). 2 is an easy number, whereas 3 is not (see the explanation about it in the problem statement). Hence the number of easy numbers consisting of 2 digits in base 2 are 1.</p>