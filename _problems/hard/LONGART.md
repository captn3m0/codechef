---
{"category_name":"hard","problem_code":"LONGART","problem_name":"Longest Article","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"iscsi ","problem_tester":"anton_lunyov","date_added":"30-11-2012","tags":{"0":"bipartite","1":"graph","2":"hard","3":"iscsi","4":"march13","5":"maximum"},"time":{"view_start_date":1363000137,"submit_start_date":1363000137,"visible_start_date":1363000099,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>In Chefland every <b>word</b> contains exactly two letters. There exist two alphabets <b>A</b> of size <b>N</b> and <b>B</b> of size <b>M</b>, where the first letter of every word comes from <b>A</b>, and the second letter of every word comes from <b>B</b>.</p>
<p>Every <b>sentence</b> is a space-separated list of words such that each letter from <b>A</b> is used exactly once in some word of the sentence and each letter from <b>B</b> is used at most once. In particular, each sentence contains exactly <b>N</b> words.</p>
<p>An <b>article</b> contains exactly one sentence per line. Chef would like to avoid excessive word repetition, so he provides an upper bound for each word, specifying the number of times you can use that word in the article. Chef has no time so he asks you to write the longest possible article under the given constraints.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test contains an integer <b>N</b> and a string <b>A</b> of length <b>N</b>, denoting the first alphabet. <b>N</b> and <b>A</b> are separated by exactly one space. The next line contains an integer <b>M</b> and a string <b>B</b> of length <b>M</b>, denoting the second alphabet. <b>M</b> and <b>B</b> are separated by exactly one space. Then <b>N * M</b> lines follow. Each of these lines contains two-character string <b>W</b> and an integer <b>C(W)</b>, denoting the word and the upper bound on the number of times this word can be used in the article. They are separated by exactly one space.</p>
<h3>Output</h3>
<p>For each test case, output on a separate line an integer <b>K</b> denoting the number of sentences in the longest possible article, followed by the longest article in compressed format on consecutive lines. The first line of the compressed article should contain an integer <b>L</b>, denoting the number of blocks in the article. Each of following <b>L</b> lines should contain an integer <b>R</b> and a sentence <b>S</b> separated by a space. It means that in the actual article, <b>R</b> sentences equal to <b>S</b> follows. If <b>every</b> longest possible article requires more than <b>30000</b> blocks in its compressed form, output <b>-1</b> instead of the compressed article. If there are several longest articles possible you can output any of them.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> &le; <b>T</b> &le; <b>2</b></li>
<li><b>1</b> &le; <b>N, M</b> &le; <b>94</b></li>
<li><b>0</b> &le; <b>C(W)</b> &le; <b>10000000</b> (<b>10<sup>7</sup></b>)</li>
<li>All characters in <b>A</b> are different and <b>A</b> contains exactly <b>N</b> characters</li>
<li>All characters in <b>B</b> are different and <b>B</b> contains exactly <b>M</b> characters</li>
<li>Each character in <b>A</b> and <b>B</b> has ASCII code from 33 to 126, inclusive.</li>
<li>The first character of <b>W</b> is from <b>A</b> and the second one is from <b>B</b></li>
<li>All <b>N * M</b> words in the input for the particular test case are different</li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 Hi
3 esn
is 1
Hs 1
Hn 2
ie 2
in 1
He 2
1 +
1 +
++ 0

<b>Output:</b>
4
3
1 He is
1 in He 
2 Hn ie
0
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The complete article is<br/>He is<br/>in He<br/>Hn ie<br/>Hn ie<br/>Note that we use each word maximum number of times except <b>Hs</b> which was not used at all.</br/></br/></br/></br/></br/></p>
<p><b>Example case 2.</b> We have only 1 word <b>++</b> for the given alphabets <b>A</b> and <b>B</b> but Chef does not allow to use it. So the only possible article here is an empty article.</p>
