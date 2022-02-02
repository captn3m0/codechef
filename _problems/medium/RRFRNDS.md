---
{"category_name":"medium","problem_code":"RRFRNDS","problem_name":"Friends","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"shiplu","date_added":"15-07-2014","tags":{"0":"Rubanenko","1":"cook48","2":"graph","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/RRFRNDS","time":{"view_start_date":1405884600,"submit_start_date":1405884600,"visible_start_date":1405884600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRFRNDS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRFRNDS.pdf">Russian</a> as well.</h3>
<p> </p>
<p>After IOI Ilya decided to make a business.  He found a social network called "TheScorpyBook.com". It currently has <b>N</b> registered users. As in any social network two users can be friends. Ilya wants the world to be as connected as possible, so he wants to suggest friendship to some pairs of users. He will suggest user <b>u</b> to have a friendship with user <b>v</b> if they are not friends yet and there is a user <b>w</b> who is friends of both of them. Note that <b>u</b>, <b>v</b> and <b>w</b> are different users. Ilya is too busy with IPO these days, so he asks you to count how many friendship suggestions he has to send over his social network.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains an integer number <b>N</b> — the number of users in the network. Next <b>N</b> lines contain <b>N</b> characters each denoting friendship relations. <b>j<sup>th</sup></b> character if the <b>i<sup>th</sup></b> lines equals one, if users <b>i</b> and <b>j</b> are friends and equals to zero otherwise. This relation is symmetric, i.e. if user <b>a</b> is friend of <b>b</b> then <b>b</b> is also a friend of <b>a</b>.</p>
<p> </p>
<h3>Output</h3>
<p>Output a single integer — number of friendship suggestions Ilya has to send.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
0111
1000
1000
1000

<b>Output:</b>
6
</pre><p> </p>
<h3>Explanation</h3>
<p>Each of users <b>[2, 3, 4]</b> should receive two friendship suggestions, while user <b>1</b> does not need any, since he already has all other users in his friend-list.</p>
