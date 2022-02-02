---
{"category_name":"medium","problem_code":"CFTREE","problem_name":"Chef And Fibonacci Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"antoniuk1","date_added":"2-12-2015","tags":{"0":"cook66","1":"data","2":"graph","3":"ma5termind","4":"medium","5":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/CFTREE","time":{"view_start_date":1453660200,"submit_start_date":1453660200,"visible_start_date":1453660200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/mandarin/CFTREE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/russian/CFTREE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK66/vietnamese/CFTREE.pdf">Vietnamese</a> as well.</h3>
<p>Chef likes to play with trees a lot. This time, he has a rooted tree <b>T</b> consisting of <b>N</b> nodes labelled uniquely with the integers from <b>{1, … N}</b>. The node labelled <b>1</b> is the root of the tree. Each node in the given tree <b>T</b> stores a non-negative integer, initially all of which are zeros. Chef wants to perform <b>2</b> types of operations over the tree accurately and efficiently.</p>
<ul>
<li><b>U X K:</b> Update the subtree rooted at node <b>X</b> such that the the root <b>X</b> will have <b>F<sub>K</sub></b> (the <b>K<sup>th</sup></b> Fibonacci number) added to it, all its children will have <b>F<sub>k+1</sub></b> (the <b>(K+1)<sup>th</sup></b> Fibonacci number) added to them, and so on. More formally, any node in the subtree rooted at <b>X</b> will have <b>(K+D)<sup>th</sup></b> fibonacci number added to them, where <b>D</b> is the distance of the node from <b>X</b>.</li>
<li><b>Q X:</b> Report the value stored at the node <b>X</b>.</li>
</ul>
<p>Since the answer to each query can be very large, output it modulo <b>10<sup>9</sup> + 7</b>.</p>
<p><b>NOTE:</b></p>
<p><b>F<sub>K</sub></b> denotes the <b>K<sup>th</sup></b> Fibonacci number, and the series is generated as follows:</p>
<ul>
<li><b>F<sub>K</sub> = 1, if K ≤ 2 </b>.</li>
<li><b>F<sub>K</sub> = F<sub>K-1</sub> + F<sub>K-2</sub>, otherwise.</b></li>
</ul>
<p>
To know more about Fibonacci numbers, click <a href="https://en.wikipedia.org/wiki/Fibonacci_number">here</a>.
</p>
<h3>Input:</h3>
<p>First line of input contains two integer <b>N</b> and <b>M</b> denoting the number of nodes in the tree <b>T</b>, and the number of queries to be processed, respectively. Next <b>N-1</b> lines of input contain an integer each, where the integer in the <b>i<sup>th</sup></b> line denotes the parent of the <b>(i+1)<sup>th</sup></b> node. Each of the next <b>M</b> lines contains one of the <b>2</b> types of queries mentioned above.</p>
<h3>Output:</h3>
<p>For each operation of type <b>Q</b>, output the required answer modulo <b>10<sup>9</sup> + 7</b>.</p>
<h3>Constraints:</h3>
<ul>
<li><b>1 ≤ N, M, K ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ U, V, X ≤ N</b></li>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
5 10
1
1
3
3
Q 3
U 1 2
Q 2
Q 3
Q 4
Q 5
U 3 1
Q 3
Q 4
Q 5

<b>Output</b>
<pre>
0
2
2
3
3
3
4
4
</pre><h3>Explanation</h3>
<p>
<img src="https://s3.amazonaws.com/hr-challenge-images/3194/1452931833-352a82ea85-image7.jpg" title="image7.jpg" />
</p>
</pre>