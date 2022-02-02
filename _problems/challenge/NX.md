---
{"category_name":"challenge","problem_code":"NX","problem_name":"The Best Tower","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"kotlin","42":"TEXT","43":"SCM chicken","44":"CLOJ","45":"COB","46":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"5-02-2010","tags":{"0":"admin"},"time":{"view_start_date":1268736795,"submit_start_date":1268736795,"visible_start_date":1268736795,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>ByteTel, the largest mobile operator in Byteland, would like to find a place to construct a cellphone tower. There are N important places in Byteland that need to be considered.</p>
<p>These N buildings can be represented by N points in a 2D plane. The cellphone tower can be represented by a circle, and in order to construct the tower, ByteTel needs to specify its center and radius.
</p><p>Moreover, the center of the tower cannot be outside the secure area, which is also a circle.
</p><p>ByteTel wants to find a center and radius for the tower such that <b>the total squared distance</b> between each of the building and the tower is as small as possible.
</p><p>The distance between a point and a circle is defined to be the difference between the distance from the circle's center to the point and the circle's radius.
</p><p>Your task is to help ByteTel find a center and radius for their cellphone tower.

<h3>Input</h3>
</p><p>The first line contains a number t (about 10), which is the number of test case. Each test case has the following form.</p>
<p>The first line contains three numbers (X<sub>s</sub>, Y<sub>s</sub>) and R<sub>s</sub>, specifying the secure circle.
</p><p>The second line contains N, the number of buildings (1 ≤ N ≤ 100).</p>
<p>Each line in the next N lines contain two numbers which are the coordinates of a building.
</p><p>All coordinates are integer and are between 0 and 10000 (inclusive).</p>

<h3>Output</h3>
<p>For each test case, output 3 numbers (X,Y) and R, rounded to 3 decimal digits, which are the center and radius of the cellphone tower. 

<h3>Scoring</h3>
</p><p>For each test case, your score is d/D in which:
</p><p>d is the total square distance between each of the building and the tower your program has found 
</p><p>D is the total square distance between each of the building and the secure circle's center.
</p><p>Your program's score is the sum of each test case's score, the lower the better.
<h3>Example</h3>

<pre>
<b>Input:</b>
1

1 1 4
5
3 -2
2 1
5 3
4 3
4 -1

<b>Output:</b>
4.000 1.000 2.000
</pre>

</p><p>The sample output's score is 0.023444. The secure circle is red and the tower is yellow.</p>

<img src='https://www.spoj.pl/content/paulmcvn:circle.png' />