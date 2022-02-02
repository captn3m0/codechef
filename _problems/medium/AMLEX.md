---
{"category_name":"medium","problem_code":"AMLEX","problem_name":"Poetic word","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"balajiganapath","problem_tester":null,"date_added":"26-12-2017","tags":{"0":"balajiganapath"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Dhinwaji is an acclaimed poet and likes to play with words and letters. He has bought some stickers where each sticker has a lower case english letter (a-z). The letters are indexed from 1 - 26 i.e. a has index 1, b has index 2 and so on. He has <b>a<sub>i</sub></b> stickers with letter <i>i</i> on it. He needs to create a new word having exactly <b>n</b> letters. Being a programmer, Dhinwaji imposed another constraint: a letter with index <i>j</i> can only be placed at position <i>i</i> in the word if <i>i % j</i> = <i>0</i> i.e. <i>i</i> should be a multiple of <i>j</i>. Note that everything is 1-indexed. Note also that not all the stickers need to be used.
</p>
<p>
Dhinwaji wonders what is the lexicographically smallest word he can create that follows the above constraints. Since he is too busy writing poems, you have to help him find this word. Note that it is possible that there is no valid word of <b>n</b> letters that can be formed.
</p>


<h3>Input</h3>
<ul>
	<li>The first line will have a number <b>T</b> indicating the number of test cases. <b>T</b> lines follow.</li>
	<li>The first line of each test case will have one integer, <b>n</b>, denoting the required length of the new word.</li>
	<li>The second line of each test case will have 26 space separated integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>26</sub></b></li>
</ul>


<h3>Output</h3>
<ul>
	<li>For each test case, print one line containing the lexicographically smallest word which satisfies the conditions. If no such word is possible, print "#rekt" without the quotes.</li>
</ul>


<h3>Constraints</h3>
<ul>
	<li>1 ≤ <b>T</b> ≤ 5</li>
	<li>1 ≤ <b>n</b> ≤ 200</li>
	<li>0 ≤ <b>a<sub>i</sub></b> ≤ <b>n</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  
6
3 2 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  
10
1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0  

<b>Output:</b>
abc
aacbab
#rekt
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1:</b> There is 1 sticker with a, b and c each. "abc" is the only valid word possible</p>
<p><b>Testcase 2:</b> Some valid words are "abcaab", "abcbaa", "ababac" etc. The lexicographically smallest among them is aacbab</p>
<p><b>Testcase 3:</b> There are a total of 3 letters so a word with 10 letters cannot be formed</p>