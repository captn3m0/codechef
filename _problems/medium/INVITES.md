---
{"category_name":"medium","problem_code":"INVITES","problem_name":"Party Planning","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"pragrame","problem_tester":"tuananh93","date_added":"7-06-2013","tags":{"0":"cook35","1":"medium","2":"pragrame","3":"tree"},"editorial_url":"http://discuss.codechef.com/problems/INVITES","time":{"view_start_date":1372012200,"submit_start_date":1372012200,"visible_start_date":1414769400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Bilbo is planning his eleventy first birthday. Yes, he will soon be 111 years old. He has to decide whom all to invite to the Party. There are <b>N</b> families in the Shire (numbered <b>1</b> to <b>N</b>), and some families hate others. For example, the Bagginses of Bag End are on bad terms with the Sackville Bagginses. Each family declares which among the <b>N</b> families do they hate the most (we call this simply the "<b>enemy</b>" of the family).
</p>
<p>
Given the <b>N</b> enemies of each of the <b>N</b> families, Bilbo is interested in how many ways can he invite people to his party, such that he does not simultaneously invite some family as well as its enemy. Since the number may be large, output the answer modulo <b>1000000007</b>. Two ways are considered different if the set of families invited differ.
</p>
<h3>Input</h3>
<p>
The first line consists of the number of test-cases, <b>T</b>. <br /><br />
Each test case begins with a line having a single integer <b>N</b>. <br /><br />
This is followed by a line having <b>N</b> integers: denoting the enemies of each of the <b>N</b> families.
</p>
<h3>Output</h3>
<p>
For each test-case, output the number of ways modulo <b>1000000007</b> (<b>10<sup>9</sup> + 7</b>).
</p>
<h3>Constraints</h3>
<ul>
<li> <b>T</b> ≤ <b>10</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> No family is "enemies" with itself </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4
2 3 4 1
3
2 1 2
2
2 1

<b>Output:</b>
7
5
3
</pre><h3>Explanation</h3>
<p>
The first test case: {}, {1}, {2}, {3}, {4}, {1,3}, {2,4}
</p>
<p>
The second test case: {}, {1}, {2}, {3}, {1,3}
</p>
<p>
The third test case: {}, {1}, {2}
</p>
