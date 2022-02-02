---
{"category_name":"medium","problem_code":"COUNTWAY","problem_name":"Sherlock Counts Ways","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":8,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"27-09-2016","tags":{"0":"combinatorics","1":"cook75","2":"darkshadows","3":"divide","4":"fft","5":"medium"},"time":{"view_start_date":1477247400,"submit_start_date":1477247400,"visible_start_date":1477247400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/mandarin/COUNTWAY.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/russian/COUNTWAY.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/vietnamese/COUNTWAY.pdf">Vietnamese</a> as well.</h3>

<p>Watson gives an array of colored balls to Sherlock. All balls are identical in shape and size and hence, two balls with same color are indistinguishable. He gives to Sherlock an integer <b>K</b> and wants Sherlock to choose a bundle of <b>K</b> balls from the array. Sherlock is intrigued by the problem and starts wondering in how many different ways he can choose <b>K</b> such balls. Two ways are different if for any color <b>c</b>, there are different count of balls with color <b>c</b> in two chosen bundles.</p>

<h3>Input</h3>
<p>First line contains <b>N</b> and <b>K</b> followed by <b>N</b> integers in next line denoting <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> - colors of the balls.</p>

<h3>Output</h3>
<p>Output the required answer modulo <b>13313</b> in one line.
</p>
<h3>Constraints</h3>
<ul>
  <li><b>1</b> ≤ <b>K</b> ≤ <b>N</b> ≤ <b>2*10<sup>5</sup></b></li>
  <li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤  <b>2*10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input 1:</b>
4 2
3 2 2 3 

<b>Output 1:</b>
3

<b>Input 2:</b>
5 1
2 2 2 2 2

<b>Output 2:</b>
1
</pre>
<h3>Explanation</h3>
<p>
Input 1:<br/>
Three possible ways are:
<ul>
  <li>[2, 2]</li>
  <li>[3, 3]</li>
  <li>[2, 3]</li>
</ul>
<br/>
Input 2:<br/>
Only possible way is [2].
</p>