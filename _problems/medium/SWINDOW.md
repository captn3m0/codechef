---
{"category_name":"medium","problem_code":"SWINDOW","problem_name":"Sherlock and Smallest Window","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"5-10-2016","tags":{"0":"cook75","1":"darkshadows","2":"medium","3":"segment","4":"two"},"time":{"view_start_date":1477247400,"submit_start_date":1477247400,"visible_start_date":1477247400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/mandarin/SWINDOW.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/russian/SWINDOW.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK75/vietnamese/SWINDOW.pdf">Vietnamese</a> as well.</h3>

<p>
Watson has infinite supply of <b>K</b> different type of objects denoted by numbers <b>1</b> to <b>K</b>. He makes an array <b>A</b> of <b>N</b> objects, <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b> using these objects.</p>

<p>Now, he'll update this array <b>Q</b> times. In <b>i</b><sup>th</sup> update, he'll replace an existing object in array with a new object of different type from <b>1</b> to <b>K</b> <i>i.e.</i> <b>A<sub>x<sub>i</sub></sub> = y<sub>i</sub></b>.
</p>
<p>
After each update, he wants Sherlock to report the smallest size of a contiguous subarray which contains all types of objects <i>i.e.</i> smallest value of <b>R - L + 1</b> such that number of distinct values in <b>A<sub>L</sub>, A<sub>L + 1</sub>, ..., A<sub>r</sub></b> is <b>K</b>. If no such subarray exists, Sherlock should output <b>-1</b>.
</p>

<h3>Input</h3>
<p>
First line contains <b>N</b>, <b>K</b> and <b>Q</b> denoting number of array elements, number of different types of objects and number of updates. Next line contains <b>N</b> space separated integers denoting the initial array <b>A</b>. <b>i</b><sup>th</sup> of the next <b>Q</b> lines contains integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b>, denoting the update parameters of the <b>i</b><sup>th</sup> update.
</p>

<h3>Output</h3>
<p>
After each update, output an integer in one line denoting the smallest contiguous subarray size consisting of all types of objects. If no such subarray exists, output <b>-1</b>.
</p>
<h3>Constraints</h3>
<ul>
  <li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
  <li><b>1</b> ≤ <b>K</b> ≤ <b>20</sup></b></li>
  <li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
  <li><b>1</b> ≤ <b>x<sub>i</sub></b> ≤ <b>N</sup></b></li>
  <li><b>1</b> ≤ <b>A<sub>i</sub>, y<sub>i</sub></b> ≤ <b>K</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 3
1 1 1 1 1
2 3
5 2
3 2

<b>Output:</b>
-1
4
3

</pre>
<h3>Explanation</h3>
<p>
After first update, the array is <b>[1, 3, 1, 1, 1]</b>. No valid subarray exists at this stage.<br/>
After next update, the array is <b>[1, 3, 1, 1, 2]</b>. Here you can observe that contiguous subarray <b>[A<sub>2</sub>, A<sub>3</sub>, ..., A<sub>5</sub>]</b> consists of all types of objects. <br/>
After next update, the array is <b>[1, 3, 2, 1, 2]</b>. Now, contiguous subarray <b>[A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>]</b> is the smallest valid subarray.
</p>