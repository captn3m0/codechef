---
{"category_name":"medium","problem_code":"RRBIGNUM","problem_name":"Big Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"utkarsh_lath","date_added":"21-09-2013","tags":{"0":"Rubanenko","1":"cook38","2":"medium","3":"segment"},"editorial_url":"http://discuss.codechef.com/problems/RRBIGNUM","time":{"view_start_date":1379874600,"submit_start_date":1379874600,"visible_start_date":1379874600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Given a binary represantation of number <b>N</b>. You are to find how many numbers from <b>0</b> to <b>N</b> have <b>even</b> number of <b>ones</b> in their binary represantation.<br /><br />
There is also an update operation, update <b>(L,R)</b>, which means that all bits of <b>N</b> from <b>L<sup>th</sup></b> to <b>R<sup>th</sup></b> are flipped, i.e. ones to zeroes and vice versa. You have to also find the answer after each of these updates.
</p>
<h3>Input</h3>
<p>The first line of input file contains binary represantation of number <b>N</b>. The second line contains number <b>M</b> - the number of update queries. Then <b>M</b> lines follow that describe each update query by two numbers - <b>L</b> and <b>R</b>. Note that the digits of <b>N</b> are numbered from left to right. That is, the leftmost(most significant) bit is numbered <b>1</b>.</p>
<h3>Output</h3>
<p>Output the answer for initial value of <b>N</b> and also after each of the <b>M</b> updates modulo <b>10<sup>9</sup>+7</b> in separate lines.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1 ≤ L ≤ R ≤ </b> number of bits in  <b>N ≤ 10<sup>6</sup>
<li> 1 ≤ M ≤ 10<sup>5</sup></li></b>
</li><li> all digits of <b>N</b> are either <b>'0'</b> or <b>'1'</b>.
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
000
5
3 3
2 3
3 3
2 3
1 3

<b>Output:</b>
1
1
1
2
1
4
</pre><p> </p>
<h3>Explanation</h3>
<p>After the final operation, <b>N</b> becomes 7. All numbers in range <b>[0..7]</b> that have even number of ones in their binary representation are: <b>0, 3, 5</b> and <b>6</b>.</p>
