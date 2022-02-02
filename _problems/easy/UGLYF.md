---
{"category_name":"easy","problem_code":"UGLYF","problem_name":"Sherlock and the Ugly Flower","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"27-09-2016","tags":{"0":"binary","1":"cook75","2":"darkshadows","3":"easy"},"time":{"view_start_date":1477247400,"submit_start_date":1477247400,"visible_start_date":1477247400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/mandarin/UGLYF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/russian/UGLYF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/vietnamese/UGLYF.pdf">Vietnamese</a> as well.</h3>

<p>Watson gives to Sherlock two strings <b>S<sub>1</sub></b> and <b>S<sub>2</sub></b> consisting of uppercase English alphabets</b>. Next he wants Sherlock to build a flower in the following way:<br>
</p>   
<p>
He puts both strings perpendicular to each other in such a way that they overlap at the same character. For example, if he has two strings "<b>ABCDEF</b>" and "<b>XXBCZQ</b>", one possible way to make a flower is:</p>
   
<pre>
<span class="inner-pre" style="font-size: 20px">
          A
          B 
X X B C  Z  Q
          D
          E
          F
</span>
</pre>
<p>Length of petals in the above flower are 2, 2, 3 and 3.</p>
<p>A flower's ugliness is sum of absolute difference of adjacent petal lengths <i>i.e.</i> <i>i.e.</i> if adjacent petal lengths are <b>L<sub>1</sub>, L<sub>2</sub>, L<sub>3</sub>, L<sub>4</sub></b>, then ugliness of flower is <b>|L<sub>1</sub> - L<sub>2</sub>| + |L<sub>2</sub> - L<sub>3</sub>| + |L<sub>3</sub> - L<sub>4</sub>| + |L<sub>4</sub> - L<sub>1</sub>|. </b></p>


<p>Sherlock wants to find minimum value of ugliness if we consider all possible flower configurations. Note that a configuration is valid even if any of the petal length is 0.</p>

<h3>Input</h3>
<p>First line contains <b>T</b>, number of test cases. Each test case consists of string <b>S<sub>1</sub></b> in one line followed by string <b>S<sub>2</sub></b> in the next line. It is guaranteed that there exists at least one possible way to make a flower.
  
<h3>Output</h3>
<p>For each test case, output in one line the required answer.
</p>
<h3>Constraints</h3>
<ul>
  <li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
  <li><b>1</b> ≤ <b>length(S<sub>1</sub>), length(S<sub>2</sub>)</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
ABCDE
XXBCZQ
BBB
BBBBBB

<b>Output:</b> 
2
6
</pre>
<h3>Explanation</h3>
<p>
Test case 1:<br/>
If we keep the configuration shown in statement, the ugliness is 2, which is minimum possible.
<br/>
<br/>
Test case 2:<br/>
One of the best configurations is
<pre>
<span class="inner-pre" style="font-size: 20px">
       B 
B B B  B  B B
       B
</span>
where petal lengths are 1, 3, 1, 2.
</pre>


</p>