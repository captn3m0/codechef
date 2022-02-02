---
{"category_name":"hard","problem_code":"CHEFBOOK","problem_name":"Chefbook","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":null,"date_added":"8-05-2015","tags":{"0":"hard","1":"june15","2":"lp","3":"maxflow","4":"shiplu"},"editorial_url":"http://discuss.codechef.com/problems/CHEFBOOK","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/CHEFBOOK.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/CHEFBOOK.pdf">Russian</a>.</h3>

<p>
The Chief Chef has built a new social network call <b>Chefbook</b>. Everyone who is interested in cooking can join Chefbook. Already <b>N</b> chefs joined the chefbook and loved it so much.
</p>
<p>
In Chefbook, a chef can be a friend with other chefs (one or more). The friendship is not bidirectional that means if chef <b>A</b> is a friend of chef <b>B</b>, not necessarily chef <b>B</b> is a friend of chef <b>A</b>. Every chef <b>x</b> in Chefbook will give a likeness value <b>L<sub>xy</sub></b> to each of his Chefbook friend <b>y</b>. Likeness indicates how much he like his friend.
</p>
<p>
The Chief Chef wants that every chef in Chefbook should have friends with moderate likeness only. He does not like the fact one chef likes another chef too much or one chef does not like another chef at all. As he is the admin of the Chefbook, he decided to change the likeness value of some chef’s such that all the likeness value resides between a lower value and upper value. But changing likeness value for each friendship could be tedious and boring job. So Chief Chef comes up with a new idea. He will choose a chef <b>x</b> of Chefbook and increase likeness <b>L<sub>xy</sub></b> by <b>P<sub>x</sub></b> for all of his friends <b>y</b>. Another option is he will choose a chef <b>y</b> and decrease likeness <b>L<sub>xy</sub></b> by <b>Q<sub>y</sub></b> for all chef <b>x</b> such that <b>y</b> is a friend of <b>x</b>. The increase operation on <b>x</b> or decrease operation on <b>y</b> can be done only once. During any operation the intermediate value of <b>L<sub>xy</sub></b> can have any value but the final value of <b>L<sub>xy</sub></b> (for all <b>x</b> and <b>y</b>) should be in between <b>S<sub>xy</sub></b> and <b>T<sub>xy</sub> </b> (inclusive), where <b>S<sub>xy</sub></b> and <b>T<sub>xy</sub></b> are the lower limit and upper limit respectively of the new likeness value <b>W<sub>xy</sub></b> of chef <b>x</b> for his friend <b>y</b>.
</p>
<p>
<b>W<sub>xy</sub> = L<sub>xy</sub> + P<sub>x</sub> - Q<sub>y</sub></b>
</p>
<p>
Though Chief Chef wants to moderate the likeness value but he does not wants reduce overall likeness in Chefbook. So he decided to make the change such that sum of likeness <b>W<sub>xy</sub></b> should be as maximum as possible.
</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases to follow.<br />
The first line of each test case contains two space separated integers <b>N</b> and <b>M</b>, denoting the number of chefs in the Chefbook and number of friend relationship in Chefbook respectively. Followed by <b>M</b> lines, each containing five space separated integers <b>x</b>, <b>y</b>, <b>L<sub>xy</sub></b>, <b>S<sub>xy</sub></b> and <b>T<sub>xy</sub></b>  such that <b>y</b> is a friend of <b>x</b> where <b>L<sub>xy</sub></b> is the <b>y</b>’s likeness value given by <b>x</b> and <b>S<sub>xy</sub></b> and <b>T<sub>xy</sub></b> are the lower and upper limit respectively of the new likeness <b>W<sub>xy</sub></b>  set by Chief chef. Note that <b>x</b> and <b>y</b> can be same (a chef can like himself).</p>
<h3>Output</h3>
<p>First line of each test case will contain a single line with a single word "<b>Unlike</b>" (without the quotes) if it is not possible to change the likeness value according to the constraint described above. Otherwise each test case will consist of three lines. First line will contain a single integer <b>SUM</b>, which is the sum of the new likeness value <b>W<sub>xy</sub></b>. Next line will contain <b>N</b> space separated integers containing <b>P<sub>x</sub></b> (for all <b>x = 1</b> to <b>N</b>). Similarly next line will contain <b>N</b> space separated integers containing <b>Q<sub>y</sub></b> (for all <b>y = 1</b> to <b>N</b>). If there are several <b>P</b> and <b>Q</b> possible output anyone of them.</p>
<p> Note that, there will be no new friendship within these operation.</p>
<h3>Constraints</h3>
<ul>
<li><b>1≤T≤10</b></li>
<li><b>1≤N≤100</b></li>
<li><b>1≤M≤N<sup>2</sup></b></li>
<li><b>1≤x, y≤N</b></li>
<li><b>-600≤L<sub>xy</sub>≤600</b></li>
<li><b>-1000≤S<sub>xy</sub>≤T<sub>xy</sub>≤1000</b></li>
<li><b>0≤P<sub>x</sub>, Q<sub>y</sub>≤10<sup>6</sup></b></li>
</ul>

<h3>Subtask</h3>
<p><b>Subtask #1: </b> Point 20</p>
<ul>
<li><b>1≤N≤20</b></li>
</ul>
<p><b>Subtask #2: </b> Point 80</p>
<ul>
<li><b>1≤N≤100</b></li>
</ul>

<h3>Example</h3>
<pre><b>Sample Input</b>
2
2 4
1 1 2 5 10
1 2 4 8 10 
2 1 3 5 10
2 2 2 7 10
2 4
1 1 1 7 7
1 2 7 7 7
2 1 7 7 7
2 2 7 7 7

<b>Output for Sample Input</b>
37
15 17
10 9
Unlike

</pre>
