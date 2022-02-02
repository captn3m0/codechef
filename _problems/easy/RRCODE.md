---
{"category_name":"easy","problem_code":"RRCODE","problem_name":"Code","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"utkarsh_lath","date_added":"19-09-2013","tags":{"0":"Rubanenko","1":"cakewalk","2":"cook38"},"editorial_url":"http://discuss.codechef.com/problems/RRCODE","time":{"view_start_date":1379874600,"submit_start_date":1379874600,"visible_start_date":1379874600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a simple code of a function and you would like to know what it will return. </p>
<pre><code>
 F(<b>N, K, Answer, Operator, A[N]</b>) returns int;
  begin
      for <b>i</b>=1..<b>K</b> do
         for <b>j</b>=1..<b>N</b> do
            <b>Answer</b>=(<b>Answer</b> operator <b>A<sub>j</sub></b>)
       return <b>Answer</b>
  end
</code></pre><p><br />
<br/></br/></p>
<p>Here <b>N, K, Answer</b> and the value returned by the function <b>F</b> are integers; <b>A</b> is an array of <b>N</b> integers numbered from <b>1</b> to <b>N</b>; <b>Operator</b> can be one of the binary operators <b>XOR, AND</b> or <b>OR</b>. If you are not familiar with these terms then better have a look at following articles: <a href="http://en.wikipedia.org/wiki/Bitwise_operation#XOR">XOR</a>, <a href="http://en.wikipedia.org/wiki/Bitwise_operation#OR">OR</a>, <a href="http://en.wikipedia.org/wiki/Bitwise_operation#AND">AND</a>.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> - the number of test cases in file. Description of each test case consists of three lines. The first one contains three integers <b>N, K</b> and initial <b>Answer</b>. Array <b>A</b> is given in the second line and <b>Operator</b> is situated on the third one. Operators are given as strings, of capital letters. It is guaranteed that there will be no whitespaces before or after <b>Operator</b>. </p>
<h3>Output</h3>
<p>Output one line for each test case - the value that is returned by described function with given arguments.</p>
<h3>Constraints</h3>
<ul>
<li><b>1≤T≤100
<li>1≤N≤1000<br />
</li><li>0≤Answer, K, A<sub>i</sub>≤10<sup>9</sup></li></b>
</li><li> <b>Operator</b> is one of these: <b>"AND", "XOR", "OR"</b>.
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 1 0
1 2 3
XOR
3 1 0
1 2 3
AND
3 1 0
1 2 3
OR
<b>Output:</b>
0
0
3
</pre><p> </p>
<h3>Explanation</h3>
<p>
0 xor 1 xor 2 xor 3 = 0<br /><br />
0 and 1 and 2 and 3 = 0<br /><br />
0 or 1 or 2 or 3 = 3<br />
</p>
