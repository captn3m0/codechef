---
{"category_name":"school","problem_code":"MOVIEWKN","problem_name":"Movie Weekend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"pavel1996","date_added":"26-03-2016","tags":{"0":"cakewalk","1":"cook69","2":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/MOVIEWKN","time":{"view_start_date":1460917800,"submit_start_date":1460917800,"visible_start_date":1460917800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/mandarin/MOVIEWKN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/russian/MOVIEWKN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK69/vietnamese/MOVIEWKN.pdf">Vietnamese</a> as well.</h3>
<p>Little Egor is a huge movie fan. He likes watching different kinds of movies: from drama movies to comedy movies, from teen movies to horror movies. He is planning to visit cinema this weekend, but he's not sure which movie he should watch.</p>
<p>There are <b>n</b> movies to watch during this weekend. Each movie can be characterized by two integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, denoting the length and the rating of the corresponding movie. Egor wants to watch <i>exactly</i> one movie with the maximal value of <b>L<sub>i</sub> × R<sub>i</sub></b>. If there are several such movies, he would pick a one with the maximal <b>R<sub>i</sub></b> among them. If there is still a tie, he would pick the one with the minimal index among them.</p>
<p>Your task is to help Egor to pick a movie to watch during this weekend.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of the test case description contains an integer <b>n</b>.</p>
<p>The second line of the test case description contains <b>n</b> integers <b>L<sub>1</sub>, L<sub>2</sub>, ...,L<sub>n</sub></b>. The following line contains <b>n</b> integers <b>R<sub>1</sub>, R<sub>2</sub>, ..., R<sub>n</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output a single integer <b>i</b> denoting the index of the movie that Egor should watch during this weekend. Note that we follow 1-based indexing.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 5</b></li>
<li><b>1 ≤ n ≤ 100</b></li>
<li><b>1 ≤ L<sub>i</sub>, R<sub>i</sub> ≤ 100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
1 2
2 1
4
2 1 4 1
2 4 1 4

<b>Output:</b>
1
2
</pre><h3>Explanation</h3>
<p>In the first example case, both films have the same value of <b>L × R</b>, but the first film has a better rating.</p>
<p>In the second example case, the second and the fourth movies are equally good, but the second movie has a smaller index.</p>
