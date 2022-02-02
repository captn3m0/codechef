---
{"category_name":"challenge","problem_code":"DSANTAP","problem_name":"Santa Delivering Problem","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":null,"date_added":"7-11-2017","tags":{"0":"iscsi"},"time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/DSANTAP.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/DSANTAP.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/DSANTAP.pdf">Vietnamese</a> as well.</h3>

<p>In Chefland the ChefSanta gets a list of what children ask from him every year.
On Christmas Eve, the ChefSanta delivers the presents to the children. This year, after Santa finished delivering all the presents, he realized that he used last year’s list. Now he starts thinking about how he could fix this.
We know that
<ul>
<li>Santa has an infinite amount of every kind of present at home</li>
<li>Santa's reindeer can fly, so he doesn't need roads</li>
<li>Santa has a bag which has a maximum capacity; this capacity is given</li>
<li>Santa can leave an infinite amount of presents at every child's house at any moment except the end</li>
<li>At the end, the Santa has to go to his house, and every house should contain just the present the child from this house wished for.</li>
</ul>
</p>

<p>Santa would like to minimize the total distance that he needs to travel to fix things. Can you help him?</p>

<p>You are not required to find the optimal solution. However, the better your solution is,
 the more you will get points</p>


<h3>Input</h3>
<p>The first line contains <b>T</b> the number of test cases.</p>
<p>The next lines contain the descriptions of each test case.</p>
<p>The first line of each test case contains five space-separated integers <b>N, G, B, X, Y</b>, where <b>N</b> is the number of children in Chefland, <b>G</b> is the number of different presents, <b>B</b> is Santa's bag volume and <b>X</b>, <b>Y</b> are Santa's house coordinates.</p>
<p>The next line contains <b>G</b> integers <b>P<sub>1</sub>, ..., P<sub>G</sub></b> denoting the volume of each present.</p>
<p>The i-th of the next <b>N</b> lines contains four space-separated integers <b>X<sub>i</sub>, Y<sub>i</sub>, K<sub>i</sub>, L<sub>i</sub></b>, where <b>X<sub>i</sub>, Y<sub>i</sub></b> are the coordinates of the i-th child's house, <b>K<sub>i</sub></b> is last year's present id and <b>L<sub>i</sub></b> is this year's present id.</p>
</p>

<h3>Output</h3>
<p>For each test case (in the order given in the input) the output consists of a sequence of commands for Santa (one command per line).</p>
<p>You can give the following commands to Santa:
<ul>
<li><b>0</b> — end of the communication</li>
<li><b>1 K</b> — travel to <b>X<sub>K</sub>, Y<sub>K</sub></b>, where <b>K=0</b> means travel to Santa's house</li>
<li><b>2 K</b> — put one of the presents of type <b>P<sub>K</sub></b> to the bag</li>
<li><b>3 K</b> — take one of the presents of type <b>P<sub>K</sub></b> out from the bag</li>
</ul></p>

<h3>Constraints</h3>
<ul>
<li><b>T</b> = 3</li>
<li><b>N</b> = 500</li>
<li>10 ≤ <b>G</b> ≤ 50</li>
<li>50 ≤ <b>B</b> ≤ 200</li>
<li>1 ≤ <b>P<sub>i</sub></b> ≤ 20</li>
<li>0 ≤ <b>X</b>, <b>Y</b>, <b>X<sub>i</sub></b>, <b>Y<sub>i</sub> </b> ≤ 10000</li>
<li>1 ≤ <b> K<sub>i</sub></b>, <b>L<sub>i</sub> </b> ≤ <b>G</b> </li>
<li><b>K<sub>i</sub> != L<sub>i</sub></b></li>
<li>The coordinates of houses of all children and Santa's house are pairwise distinct.
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 3 10 0 0
3 5 7
1 0 2 1 
0 1 3 2
1 1 1 3

<b>Output:</b>
1 1
2 2
1 3
2 1
1 2
3 2
2 3
1 3
3 3
1 1
3 1
1 0
0
</pre>
<p> </p>

<h3>Explanation:</h3>

start with empty bag from 0, 0<br><br>

1 1            <--- score: 1<br>
2 2            <--- doesn't affect the score, Santa's bag contains 2<br>
1 3            <--- score: 2<br>
2 1            <--- doesn't affect the score, Santa's bag contains 1, 2<br>
1 2            <--- score: 3<br>
3 2            <--- doesn't affect the score, Santa's bag contains 1<br>
2 3            <--- doesn't affect the score, Santa's bag contains 1, 3<br>
1 3            <--- score: 4<br>
3 3            <--- doesn't affect the score, Santa's bag contains 1<br>
1 1            <--- score: 5<br>
3 1            <--- doesn't affect the score, Santa's bag became empty<br>
1 0            <--- score: 6<br>
0              <--- communication end<br><br>

Another possible output:<br><br>

start with empty bag from 0, 0<br><br>

2 1            <--- doesn't affect the score, Santa's bag contains 1<br>
1 1            <--- score: 1<br>
3 1            <--- doesn't affect the score, Santa's bag became empty<br>
2 2            <--- doesn't affect the score, Santa's bag contains 2<br>
1 2            <--- score: 2.4142<br>
3 2            <--- doesn't affect the score, Santa's bag became empty<br>
2 3            <--- doesn't affect the score, Santa's bag contains 3<br>
1 3            <--- score: 3.4142<br>
3 3            <--- doesn't affect the score, Santa's bag became empty<br>
2 1            <--- doesn't affect the score, Santa's bag contains 3<br>
1 0            <--- score: 4.4142<br>
0              <--- communication end<br>




<h3>Scoring</h3>
The score for each test case is the (Euclidean) distance traveled by Santa. Your total score will be the sum of your scores over all the test cases in all the test files. There will be 10 official test files. During the contest you will be able to get your score on the first 2 test files. After the contest the score for the full test set will be shown.

<h3>Test Case Generation</h3>
When we say a number is chosen from <b>(a,b)</b>, it means an integer number chosen randomly and uniformly between <b>a</b> and <b>b</b> inclusive.
<p>
<ul>
<li><b>T</b> is <b>3</b> (except sample)</li>
<li><b>N</b> is <b>500</b> </li>
<li><b>G</b> is chosen from <b>(10, 50)</b></li>
<li><b>B</b> is chosen from <b>(50, 200)</b></li>
<li>Every coordinate is chosen uniquely from <b>(0, 10000)</b>.</li>
<li>We choose a <b>minP</b> from <b>(1, 5)</b>, and <b>maxP</b> from <b>(5, 20)</b>. Every <b>P<sub>i</sub></b> is chosen from <b>(minP, maxP)</b>.</li>
<li>For each <b>i</b>, distinct <b> K<sub>i</sub></b> and <b>L<sub>i</sub> </b> are chosen from <b>(1, G)</b>.</li>
</ul>
</p>