---
{"category_name":"easy","problem_code":"FATCHEF","problem_name":"Remy paints the fence","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rosyish","problem_tester":"shangjingbo","date_added":"12-04-2012","tags":{"0":"combinatorics","1":"easy","2":"oct14","3":"rosyish"},"editorial_url":"http://discuss.codechef.com/problems/FATCHEF","time":{"view_start_date":1413192600,"submit_start_date":1413192600,"visible_start_date":1413192600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/FATCHEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/FATCHEF.pdf">Russian</a>.</h3>


<p>
Our chef Remy ate all the delicious food he made. As a result, he has become really fat :). Chef's assistant Linguini has taken up the 
herculean task of bringing back chef Remy to shape.
</p>

<p>
Linguini has built a fence which has <b>N</b> planks in a straight line. The planks are numbered 1 to N from left to right. In front of <b>M</b> of these N planks, he has put a bucket of paint. The paints may be of different colors. Each color is represented by any uppercase letter (A-Z). Chef Remy needs to paint the fence. He uses his painting brush to paint the fence. 
</p>

<p>
Chef Remy starts the task by choosing a plank which has a bucket of paint in front of it and dips his brush in the bucket. He starts walking
randomly along the straight fence passing the planks. He never moves out of the fence. Note that walking randomly along a fence means that Remy keeps walking all the time along his current direction. He can change his direction any time he wishes. Moving along a straight fence has just two directions, forward and backward.
</p>

<p>
Linguini has devised the following recipe for painting the fence.
<ul>
<li> Each bucket has an infinite supply of paint. </li>
<li> The brush can carry paint of a single color at any time. </li>
<li> When Remy passes a paint bucket, the brush acquires the color in the 
   bucket first.  </li>
<li> Every plank that Remy passes in his random walk must be colored with  
   the color in the brush. A plank will be colored completely. </li>
<li> A plank can be colored multiple times. A plank's color is the latest color it 
  is painted with. </li>
</ul>
</p>

<p>
A fence coloring is complete when each plank is painted with some color.
Linguini is watching Remy dance around with colors. He wonders how many different complete fence colorings will he be able to see.  Two fence colorings are different if there is atleast one plank numbered <b>x</b>  whose color differs in both the colorings. Find out the number of 
different complete fence colorings modulo 1000000009. 
</p>


<h3>Input</h3>
<p>
First line contains <b>T</b>, the number of test cases. T test cases follow. The first line of each case contains <b>N</b> and <b>M</b>
separated by a space. Next M lines follow each of the form <b>x</b> and <b>y</b> separated by a space. Here x is the color in the bucket which is placed at plank 
numbered y.
</p>

<h3> Constraints </h3>

<p>
<ul>
<li> 1 &lt;= T &lt;= 10 </li>
<li> 1 &lt;= N &lt;= 100000 </li>
<li> 1 &lt;= M &lt;= N </li>
<li> x will be an uppercase letter between A to Z </li>
<li> 1 &lt;= y &lt;= N </li>
</ul>
</p>


<h3>Output</h3>
<p>
The number of different complete fence colorings modulo 1000000009 for each case on a new line.
</p>


<h3>Example</h3>

<pre>
<b>Input:</b>

3
2 1
R 1
3 1
A 2
6 2
A 2
B 6

<b>Output:</b>
1
1
4
</pre>