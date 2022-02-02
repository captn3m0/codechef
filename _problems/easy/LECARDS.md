---
{"category_name":"easy","problem_code":"LECARDS","problem_name":"Little Elephant and Cards","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"9-04-2012","tags":{"0":"feb13","1":"simple","2":"simple","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LECARDS","time":{"view_start_date":1360582569,"submit_start_date":1360582569,"visible_start_date":1360582569,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Elephant from the Zoo of Lviv likes cards. He has <b>N</b> cards, each of which has one of <b>1000</b> colors. The colors are numbered from <b>1</b> to <b>1000</b>.
</p><p>Little Elephant and Big Hippo are playing the following game. At first Little Elephant takes some subset of cards, and Big Hippo takes the rest of them. Here, Little Elephant can choose to take all of the cards, or none of the cards.
</p><p>Then they play <b>1000</b> rounds: in round <b>k</b> (<b>k = 1, 2, ..., 1000</b>), they count the number of cards each has of the color <b>k</b>. Let Little Elephant has <b>a</b> cards of the color <b>k</b>, and Big Hippo has <b>b</b> cards of the color <b>k</b>. Then if <b>a &gt; b</b> Little Elephant scores <b>|a-b|</b> points, otherwise Big Hippo scores <b>|a-b|</b> points in this round, where <b>|x|</b> denotes the absolute value of <b>x</b>.
</p><p>You are given the number of cards <b>N</b> and the array <b>C</b> - list of colors of all <b>N</b> cards. Find the number of subsets (among all <b>2<sup>N</sup></b> subsets) for which Little Elephant wins the game: that is, he gains more points than Big Hippo in total, if Little Elephant takes the subset at first. Since the answer can be large, print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.

<h3>Input</h3>
</p><p>First line of the input contains single integer <b>T</b> - the number of test cases. Then <b>T</b> test cases follow.
</p><p>First line of each test case contains single integer <b>N</b>. Second line contains <b>N</b> integers separated by space - the array <b>C</b>.

<h3>Output</h3>
</p><p>For each test case, print the answer in one line.

<h3>Constraints</h3>
</p><p>
<b>1 ≤ T ≤ 100</b><br /><b>1 ≤ N ≤ 1000</b><br /><b>1 ≤ C<sub>i</sub> ≤ 1000</b>, where <b>C<sub>i</sub></b> denotes the <b>i</b>-th element of the array <b>C</b><br />

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 2 3
4
1 1 3 2

<b>Output:</b>
4
5

</pre></p>