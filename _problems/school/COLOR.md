---
{"category_name":"school","problem_code":"COLOR","problem_name":"Chef And Coloring","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ma5termind","problem_tester":"xcwgf666","date_added":"11-03-2016","tags":{"0":"april16","1":"cakewalk","2":"ma5termind"},"editorial_url":"http://discuss.codechef.com/problems/COLOR","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/COLOR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/COLOR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/COLOR.pdf">Vietnamese</a> as well.</h3>
<p>After a long time, Chef has finally decided to renovate his house. Chef's house has <b>N</b> rooms in it numbered from 1 to <b>N</b>. Each room is currently painted in one of the red, blue or green colors. Your are given configuration of colors of his house by a string <b>S</b> consisting of <b>N</b> characters. In this string, color red will be denoted by 'R', green by 'G' and blue by 'B'.
</p>
<p>
Chef does not like current painting configuration that much and would like to repaint the house such that each room has same color. </p>
<p>For painting, Chef has all the 3 color paints available and mixing any 2 color paints will result into 3rd color paint i.e
<ul>
<li>R + B = G</li>
<li>B + G = R</li>
<li>G + R = B</li>
</ul>
</p><p> </p>
<p>For example, painting a room having red color before with green color paint will make the color of room blue.
</p>
<p>
Also, Chef has many buckets of paint of each color. Simply put, you can assume that he will not run out of paint.
</p>
<p>Being extraordinary lazy, our little chef does not want to work much and therefore, he has asked you to find the minimum number of rooms he has to repaint <b>(possibly zero)</b> in order to have all the rooms with same color. Can you please help him?</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the number of test cases. First line of each test case contains an integer <b>N</b> denoting the number of rooms in the chef's house. Next line of each test case contains a string <b>S</b> denoting the current color configuration of rooms.</p>
<h3>Output</h3>
<p>For each test case, Print the minimum number of rooms need to be painted in order to have all the rooms painted with same color i.e either red, blue or green.</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 10</li>
<p></p></b><br />
<b>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
<p></p></b><br />
<b>
<li>S<sub>i</sub> = {'R','G','B'}</li>
<p></p></b>
</ul>
<h3>Scoring</h3>
<ul>
<li>Subtask 1 (40 points) : <b>1 ≤ N ≤ 10 </b></li>
<li>Subtask 2 (60 points) : <b>original constraints</b></li>
</ul>
<h3>Example</h3>
<p><b>Input</b></p>
<pre>
3
3
RGR
3
RRR
3
RGB
</pre><p>
<b>Output</b></p>
<pre>
1
0
2
</pre><h3>Explanation:</h3>
<ul>
<li><b>Test 1:</b> Chef prefers to paint room 2 with blue color such that the resulting color will be red and all the rooms have same color i.e red.</li>
<li><b>Test 2:</b> Given configuration has all the rooms painted with red color and therefore, chef does not need to do painting work at all.</li>
<li><b>Test 3:</b> One possible way of renovation is to paint room 1 with green color, room 2 with red color such that all rooms have same color i.e blue.</li>
</ul>
