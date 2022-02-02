---
{"category_name":"medium","problem_code":"MTMXSUM","problem_name":"Matrix Maximum Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"iscsi","date_added":"22-10-2015","tags":{"0":"easy","1":"feb16","2":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/MTMXSUM","time":{"view_start_date":1455528600,"submit_start_date":1455528600,"visible_start_date":1455528600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/mandarin/MTMXSUM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/russian/MTMXSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB16/vietnamese/MTMXSUM.pdf">Vietnamese</a> as well.</h3>


<p>
Devu and Churu love to play with numbers. Today, each of them has an <b>1 - based</b> array consisting of <b>N</b> positive integers. Devu named his array as <b>A</b> while Churu called his array <b>B</b>. They have decided to construct a matrix <b>C</b> of size <b>N × N</b> using given arrays <b>A</b> and <b>B</b> where an entry <b>C<sub>i,j</sub></b> in the matrix is given by following expression.</p>

<img src="https://s3.amazonaws.com/hr-challenge-images/0/1454483626-30b1711b6a-image2.JPG" title="image2.JPG" />

<p>where <b>C<sub>i,j</sub></b> denotes the value of the <b>j<sup>th</sup></b> cell in the <b>i<sup>th</sup></b> row of matrix <b>C</b>, <b>A<sub>i</sub></b> denotes the <b>i<sup>th</sup></b> element of the array <b>A</b> and <b>B<sub>j</sub></b> denotes the <b>j<sup>th</sup></b> element of the array <b>B</b>.</p>
<br/>
<p>For example, consider the following arrays <b>A</b> and <b>B</b> each containing <b>3</b> elements.</p>
<pre>
<b>A = [4, 1, 9]</b>
<b>B = [3, 4, 1]</b>

Constructed matrix <b>C</b> will look like:<b>
       [20, 30, 20],
C = [12, 18, 12],
       [48, 72, 48],
</b>
</pre>

<p>Then, for a given <b>K</b>, they will create a list <b>L<sub>K</sub></b> of all sub-matrices of size <b>K x K</b> from the constructed matrix <b>C</b> and compute the following expression over the created list <b>L<sub>K</sub></b>.</p>

<img src="https://s3.amazonaws.com/hr-challenge-images/0/1454483411-9199f9c2a5-image1.JPG" title="image1.JPG" />

<p>where <b>max( X )</b> denotes the maximum element present in the matrix <b>X</b>.</p>
<br/>
<p>For example, consider the above matrix <b>C</b> and <b>K = 2</b>. Here, <b>L<sub>K</sub></b> contains following <b>4</b> sub-matrices of size <b>2 x 2</b>.</p>
<pre><b>
[20, 30]      [30, 20]      [12, 18]      [18, 12]
[12, 18]      [18, 12]      [48, 72]      [72, 48]

M<sub>1</sub> = 30      M<sub>2</sub> = 30      M<sub>3</sub> = 72      M<sub>4</sub> = 72</b>
</pre><br/>
<p>Therefore, for <b>K = 2</b>, <b>S = M<sub>1</sub> + M<sub>2</sub> + M<sub>3</sub> + M<sub>4</sub> = (30 + 30 + 72 + 72) % (10<sup>9</sup> + 7) = 204.</b>
<p>Devu and Churu like the task very much and decided to compute the above expression for all possible values of <b>K</b> such that <b>1 ≤ K ≤ N</b> but suddenly their mom called them for some urgent work and they had to leave the task in between. Can you help them completing this task?</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>N</b> denoting the size of both arrays <b>A</b> and <b>B</b>. Second line of input contains <b>N</b> space-separated integers denoting the array <b>A</b>. Third line of input also contains <b>N</b> space separated integers, denoting the array <b>B</b>.</p>

<h3>Output</h3>
<p>Output <b>N</b> space-separated integers, where the <b>i<sup>th</sup></b> integer in the output denotes the required answer considering all sub-matrices of size <b>i x i</b>.</p>

<h3>Constraints</h3>
<ul>
<b><li>1 ≤ N ≤ 10<sup>5</sup></li></b>
<b><li>1 ≤ A<sub>i</sub>, B<sub>j</sub> ≤ 10<sup>9</sup></li></b>
</ul>

<h3>Subtasks</h3>
<ul>
<b><li>1 ≤ N ≤ 10<sup>4</sup> : ( 40 pts )</li></b>
<b><li>1 ≤ N ≤ 10<sup>5</sup> : ( 60 pts )</li></b>
</ul>


<h3> Example </h3>
<pre>
<b>Input</b>
3
4 1 9
3 4 1

<b>Output</b>
280 204 72

</pre>