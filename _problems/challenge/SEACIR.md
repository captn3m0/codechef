---
{"category_name":"challenge","problem_code":"SEACIR","problem_name":"Sereja and Circles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":null,"date_added":"7-10-2016","tags":{"0":"sereja"},"time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/SEACIR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/SEACIR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/SEACIR.pdf">Vietnamese</a> as well.</h3>


<p>Sereja has a set of <b>N</b> circles. Dima also has a set of <b>N</b> circles. Sereja can easily recognise his set of circles because he has built the circles himself using strong steel wire. One day, Dima put his <b>N</b> circles into Sereja's circles and shuffled all the circles here and there. You are given this information about the circles by <b>2 * N</b> integers corresponding to the radiuses of the circles.</p>

<p>Now, Sereja wants to provide you details about his circles in the form of interactive queries, <b>i</b>-th of which will denote the radius of <b>i</b>-th of his circles. For each query, you have to position a circle of this radius in 2-D plane by providing the coordinates of its center <b>(x, y)</b>, such that <b>(r ≤ X, Y ≤ S - r)</b>. 

<p>Your aim is to position the Sereja's circles in the way so as to minimum distance between each pair of circles is as large as possible.</p>

<p>Sereja is a generous person, so he will allow you to skip placing circles at most <b>skip</b> times of his queries.</p>

<h3>Input + Output</h3>
<p>First line will contain three space separated integers <b>N, S, skip</b>. Next line contains <b>2*N</b> numbers written on the sheet of paper.</p>
<p>After this you will be given <b>N</b> queries. The <b>i</b>-th of the query will contain an integer <b>r</b> denoting the radius of Sereja's <b>i</b>-th circle. After each query you should output two integers: <b>x</b> and <b>y</b> - position of the center of the circle, if you don't want to place current circle you can output <b>-1 -1</b>, you are allowed to skip circle in this way at most <b>skip</b> times.</p>

<h3>Example</h3>
<pre><b>Input + Output:</b>
5 10 2
1 1 1 1 1 2 2 2 2 2
>1
<9 1
>1
<1 9
>2
<-1 -1
>2
<-1 -1
>2
<2 2
</pre>

<h3>Test generation</h3>
<p>
<h3>Test Plan #1</h3>
<ul>
<li><b>N = 200, S = 5000, skip = 50</b></li>
<li>1 ≤ <b>R[i] ≤ 100</b></li>
<li><b>R[i]</b> are generated uniformly randomly</li>
</ul>
</p>

<p>
<h3>Test Plan #2</h3>
<ul>
<li><b>N = 200, S = 10000, skip = 50</b></li>
<li>100 ≤ <b>R[i] ≤ 500</b></li>
<li><b>R[i]</b> are generated uniformly randomly</li>
</ul>
</p>

<p>
<h3>Test Plan #3</h3>
<ul>
<li><b>N = 200, S = 5000, skip = 25</b></li>
<li>1 ≤ <b>R[i] ≤ 100</b></li>
<li>Radius of circles of Sereja is generated according to following probability distribution, denoted as <i>nice</i> distribution. Let <b>total</b> denote the sum of <b>log(r)</b> for <b>r</b> from 1 to 100. Probability of occurrence of radius <b>r</b> (takes values in the range [1, 100]) will be <b>log(r) / total</b>.
<li><b>R[i]</b>'s of Dima are generated uniformly randomly</li>
</ul>
</p>

<p>
<h3>Test Plan #4</h3>
<ul>
<li><b>N = 200, S = 5000, skip = 25</b></li>
<li>1 ≤ <b>R[i] ≤ 100</b></li>
<li>Radius of circles of Sereja is generated uniformly randomly.  
<li><b>R[i]</b>'s of Dima are generated according to the <i>nice</i> probability distribution.</li>
</ul>
</p>

<h3>Scoring</h3>
<p>For each test case value <b>D</b> will be minimal distance between each pair of settled circles. If some pair of circles is intersected or some circle cover some other <b>D</b> is equal to <b>zero</b>.</p>

<p>For example, you can see that value of <b>D</b> will be 6.899495 for the sample example shown above.</p>

<p>Lets <b>S</b> will be sum of <b>D</b> among all tests and <b>W</b> is maximal value of <b>S</b> among all participants. Your displayed score will be equal to <b>S/W</b></p>

<p>During the contest, your score will be be only of 20% of the files (i.e. 4 files out of 20), one for each group of test cases. Though verdict of your program will be decided by all the 20 files.</p>


<p>Please make sure to flush the standard output after you print the coordinates of the center. You can do this by fflush(stdout) in C++, System.out.flush() in Java.</p>