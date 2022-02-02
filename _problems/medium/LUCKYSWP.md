---
{"category_name":"medium","problem_code":"LUCKYSWP","problem_name":"Little Elephant and Swapping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"anton_lunyov","date_added":"1-03-2012","tags":{"0":"cook22","1":"medium","2":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LUCKYSWP","time":{"view_start_date":1337540935,"submit_start_date":1337540935,"visible_start_date":1337539200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A Little Elephant from the Zoo of Lviv likes <i>lucky strings</i>, i.e., the strings that consist only of the lucky digits <b>4</b> and <b>7</b>.</p>

He is now studying some special transformation defined on the set of the lucky strings. The lucky string <b>T</b> is called a <i>swap permutation</i> of the lucky string <b>S</b> with <b>|S| = N</b> if it can be derived from <b>S</b> by the following process.
<ul>
<li> Choose some integers <b>L</b> and <b>R</b> such that <b>1 ≤ L ≤ R ≤ N</b>.
</li><li> Denote by <b>A</b> the substring <b>S[L, R]</b> and by <b>B</b> the concatenation <b>S[1, L - 1] + S[R + 1, N]</b>.
</li><li> Choose some integer <b>K</b> such that <b>0 ≤ K ≤ |B|</b>.
</li><li> Put <b>T = B[1, K] + A + B[K + 1, |B|]</b>.
</li></ul>
<br />

<p>In other words, <b>T</b> is a swap permutation of <b>S</b> if it can be obtained from <b>S</b> by deleting some non-empty substring from <b>S</b> and then inserting it back into any position of <b>S</b>. Note that <b>S</b> is always a swap permutation of itself.</p>

<p>Denote by <b>F(S)</b> the length of the longest non-decreasing subsequence of <b>S</b>. In other words, this subsequence should have one of the following forms: <b>444...444</b>, <b>777...777</b>, <b>444...444777...777</b>.</p>

<p> The Little Elephant has the lucky string <b>S</b> and as an experienced theoretical scientist he is interested in some quite theoretical problem. Namely, he wants to find the maximal value of <b>F(T)</b> if <b>T</b> can be an arbitrary swap permutation of <b>S</b>. Help him and find this value.</p>

<p><b>Notes.</b></p>

Let <b>S</b> be some lucky string. Then

<ul>

<li><b>|S|</b> denotes the length of the string <b>S</b>;

</li><li><b>S[i]</b> (<b>1 ≤ i ≤ |S|</b>) denotes the <b>i</b><sup>th</sup> character of <b>S</b> (the numeration of characters starts from <b>1</b>);

</li><li> <b>S[L, R]</b> (<b>1 ≤ L ≤ R ≤ |S|</b>) denotes the string with the following sequence of characters: <b>S[L], S[L + 1], ..., S[R]</b>, and is called a <i>substring</i> of <b>S</b>. For <b>L &gt; R</b> we mean by <b>S[L, R]</b> an empty string.

</li></ul>
<br />

<p>For any two lucky strings <b>S</b> and <b>T</b> their <i>concatenation</i> is defined as the sequence of characters in <b>S</b> followed by the sequence of characters in <b>T</b>, and is denoted by <b>S + T</b>.</p>

<p>The string <b>T</b> is called a <i>subsequence</i> of the string <b>S</b> if <b>T</b> can be derived from <b>S</b> by deleting some (possibly zero) number of characters without changing the order of the remaining characters. For example, <b>T = 474</b> is a subsequence of <b>S = 74477747</b> since after deleting characters at positions <b>1, 2, 5, 6, 8</b> from <b>S</b> we obtain <b>T</b>. Note that, the empty string and the string <b>S</b> itself are always the subsequences of <b>S</b>.</p>


<h3>Input</h3>
<p>The first line of the input file contains a single integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains one string, the string <b>S</b> for the corresponding test case. The input file does not contain any whitespaces.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer for this test case, that is, <b>max{F(T) : T is a swap permutation of S}</b>.</p>

<h3>Constraints</h3>
<p> 1 ≤ <b>T</b> ≤ 10</p>
<p> 1 ≤ <b>|S|</b> ≤ 100000</p>
<p> <b>S</b> consists only of the lucky digits <b>4</b> and <b>7</b>.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
5
7474
47
47744
7744
474747447444474

<b>Output:</b>
3
2
5
4
11

</pre>

<h3>Explanation</h3>
<p>In the first test case all different swap permutations of <b>S = 7474</b> are <b>4747, 4774, 7447, 7474, 7744</b>. Corresponding values of <b>F(T)</b> are <b>3, 3, 3, 2, 2</b>. Hence the answer is <b>3</b>.</p>

<p>In the second, third and fourth test cases there exists a non-decreasing swap permutation and hence the answer is equal to the length of the string. Namely, <b>S = 47</b> is itself non-decreasing, for <b>S = 47744</b> we can obtain the non-decreasing <b>T = 44477</b> if we delete the substring <b>S[2,3] = 77</b> and then insert it back into the end of the string, finally, for <b>S = 7744</b> we can obtain the non-decreasing <b>T = 4477</b> if we delete the substring <b>S[1,2] = 77</b> and then insert it back into the end of the string.</p>