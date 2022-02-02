---
{"category_name":"medium","problem_code":"HBIRD","problem_name":"Chef And Hungry Birds","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"furko","date_added":"25-04-2015","tags":{"0":"binary","1":"dynamic","2":"easy","3":"ma5termind","4":"march16"},"editorial_url":"http://discuss.codechef.com/problems/HBIRD","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/HBIRD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/HBIRD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/HBIRD.pdf">Vietnamese</a> as well.</h3>


<p>Chef loves to listen bird's chirping. Now Chef is in his office and is missing the chirping of birds after getting bored with long hours of work. So, he wants to have some fun. He likes paper birds of special shape. Here is some examples of beautiful paper birds Chef likes. 
<IMG SRC="https://s3.amazonaws.com/codechef_shared/download/HBIRD2.PNG"/> </br>

<p>As we can see, the stomach of each bird is a <b>right angled isoceles triangle</b> (highlighted in the figures).</p>

<p>Today morning, Chef had bought a rectangular piece of paper of height <b>N</b> and width <b>M</b>. For e.g. consider following rectangular paper of height <b>N = 3</b> and width <b>M = 5</b>.</br>
<IMG SRC = "https://s3.amazonaws.com/codechef_shared/download/HBIRD3.png"/>
</p>

<p>As you can see that, this is not an ordinary paper. This paper has some marked lines where each marked line joins two points available on the paper.</p>

<p>Now, Chef imagines creating birds for <b>each possible right isoceles triangle</b> whose sides are along the marked lines of the paper and its vertices are among the given points of the rectangular paper. See the sample test case for better understanding.</p> 

<p>Each little bird has capacity to eat some grams of grain. Capacity of eating grains for a bird is defined by sum of hungriness of <b>all the points</b> included in triangle (including the corners of triangle) made by bird's stomach.</p>

<p>See the following images for some examples:
<IMG SRC ="https://s3.amazonaws.com/codechef_shared/download/HBIRD1.png">
</p>

<p>Now, Chef has <b>G</b> grams of grains at his house and wants to feed as many birds as possible. Can you help him in finding out the maximum number of birds he can feed? 
</p>

<h3>Input </h3>
<p>First line of input contains three space separated integers <b>N</b> , <b>M</b> and <b>Q</b> denoting the length, width of the paper and number of chef's questions. Next <b>N</b> lines of input contains <b>M</b> space separated integers where the <b>j<sup>th</sup></b> integer in the <b>i<sup>th</sup></b> line denotes the hungriness of that point i.e <b>H<sub>i,j</sub></b>. Next <b>Q</b> lines of input contains a single integer <b>G</b> denoting the grams of grain available to the chef.</p>

<h3>Output </h3>
<p>For each of the chef's question, Print the maximum number of birds he can feed.</p>

<h3>Constraints </h3>
<ul>
<b><li>1 ≤ N ≤ 335</li></b>
<b><li>1 ≤ N * M ≤ 112225</li></b>
<b><li>0 ≤ H<sub>i,j</sub> ≤ 50</li></b>
<b><li>1 ≤ Q ≤ 10<sup>5</sup></li></b>
<b><li>0 ≤ G ≤ 10<sup>9</sup></li></b>
</ul> 

<h3>Subtask</h3>
<ul>
<li><b>Subtask 1 (20 pts):</b> 
<ul>
<li><b>1 ≤ N, M, Q ≤ 50</li>
<li>0 ≤ H<sub>i,j</sub> ≤ 50</li>
<li>0 ≤ G ≤ 10<sup>9</sup></b></li>
</ul>
<li><b>Subtask 2 (80 pts):</b> Original Constraints </li>
</ul>
<h3>Example</h3>
<b>Input</b>
<pre>
2 3 3
1 2 0
3 0 0
5
10
15

</pre>
<b>Output</b>
<pre>
2
4
5
</pre>

<h3>Explanation</h3>
<img src="https://s3.amazonaws.com/hr-challenge-images/16094/1456949882-92fd6e6d3e-final.jpg" title="final.jpg" /><p>There are these 10 birds possible with their hungriness as follows:</p>
<pre>
(A) 4
(B) 6
(C) 3
(D) 5
(E) 5
(F) 2 
(G) 2
(H) 2
(I) 0
(J) 3
</pre>

Note that bird <b>(I)</b> is not hungry and therefore we don't need to feed it.
<li>With <b>5</b> grams of grains, we can only feed maximum of <b>2</b> birds say birds <b>(C)</b> and <b>(F)</b>.</li>
<li>With <b>10</b> grams of grains, we can only feed at maximum of <b>4</b> birds say birds <b>(C), (F), (G)</b> and <b>(H)</b>.</li>