---
{"category_name":"easy","problem_code":"CHEFVOTE","problem_name":"Chefs and Voting for best friend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"20-05-2015","tags":{"0":"ad","1":"admin2","2":"digraph","3":"graph","4":"realization","5":"snck151a"},"editorial_url":"http://discuss.codechef.com/problems/CHEFVOTE","time":{"view_start_date":1432379700,"submit_start_date":1432379700,"visible_start_date":1432379700,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/mandarin/CHEFVOTE.pdf">Mandarin Chinese </a> , <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/russian/CHEFVOTE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCK151A/vietnamese/CHEFVOTE.pdf">Vietnamese</a></h3>


<p>
There are <b>n</b> chef's in Chefland. There is a festival in Chefland in which each chef is asked to vote a person as his best friend. Obviously, a person can't vote himself as his best friend.  Note that the best friend relationship is not necessarily bi-directional, i.e. it might be possible that x is best friend of y, but y is not a best friend of x.
</p>

<p>
Devu was the election commissioner who conducted this voting. Unfortunately, he was sleeping during the voting time. So, he could not see the actual vote of each person, instead after the voting, he counted the number of votes of each person and found that number of votes of <b>i</b>-th person was equal to <b>c<sub>i</sub></b>. 
</p>

<p>
Now he is wondering whether this distribution of votes corresponds to some actual voting or some fraudulent voting has happened. If the current distribution of votes does not correspond to any real voting, print -1. Otherwise, print any one of the possible voting which might have lead to the current distribution. If there are more than one possible ways of voting leading to the current distribution, you can print any one of them.
</p>

<h3>Input</h3>
<ul>
<li>First line of the input contains a single integer <b>T</b> denoting number of test cases.</li>
<li>First line of each test case, contains a single integer <b>n</b>.</li>
<li>Second line of each test case, contains <b>n</b> space separated integers denoting array <b>c</b>.</li>
</ul>

<h3>Output</h3>
For each test case,
<ul>
<li>If there is no real voting corresponding to given distribution of votes, print -1 in a single line.</li>
<li>Otherwise, print <b>n</b> space separated integers denoting a possible voting leading to current distribution of votes. <b>i</b>-th integer should denote the index of the person (1 based indexing) whom <b>i</b>-th person has voted as his best friend.</li>
</ul>

<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ T ≤ 500</b></li>
<li><b>1 ≤ n ≤ 50</b></li>
<li><b>0 ≤ c<sub>i</sub> ≤ n</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
1 1 1
3
3 0 0
3
2 2 0

<b>Output:</b>
2 3 1
-1
-1
</pre>

<h3>Explanation</h3>
<p>
<b>Example 1:</b> In this example, each person has received one vote. One possible example of real voting leading to this distribution is {2, 3, 1}. In this distribution, number of votes of all three persons are equal to 1. Also it is real voting because no person votes himself as his best friend. </br>
You can also output another possible distribution {3, 1, 2} too.
</p>
<p>
<b>Example 2:</b> There is no real voting  corresponding to this voting distribution.
</p>
<p>
<b>Example 3:</b> There is no real voting  corresponding to this voting distribution.
</p>