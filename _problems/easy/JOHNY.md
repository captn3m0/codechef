---
{"category_name":"easy","problem_code":"JOHNY","problem_name":"Uncle Johny","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":null,"date_added":"3-10-2013","tags":{"0":"cakewalk","1":"kostya_by","2":"nov13"},"editorial_url":"http://discuss.codechef.com/problems/JOHNY","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/JOHNY.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/JOHNY.PDF"> Russian</a>.</h3>
<p>Vlad enjoys listening to music. He lives in Sam's Town. A few days ago he had a birthday, so his parents gave him a gift: MP3-player! Vlad was the happiest man in the world! Now he can listen his favorite songs whenever he wants!</p>
<p>Vlad built up his own playlist. The playlist consists of <b>N</b> songs, each has a <b>unique</b> positive integer length. Vlad likes all the songs from his playlist, but there is a song, which he likes more than the others. It's named "Uncle Johny".</p>
<p>After creation of the playlist, Vlad decided to sort the songs in increasing order of their lengths. For example, if the lengths of the songs in playlist was {1, 3, 5, 2, 4} after sorting it becomes {1, 2, 3, 4, 5}. Before the sorting, "Uncle Johny" was on <b>K</b>-th position (1-indexing is assumed for the playlist) in the playlist.</p>
<p>Vlad needs your help! He gives you all the information of his playlist. Your task is to find the position of "Uncle Johny" in  the sorted playlist.</p>

<h3>Input</h3>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. 
<p> </p> 
The first line of each test case contains one integer <b>N</b> denoting the number of songs in Vlad's playlist. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the lenghts of Vlad's songs.
The third line contains the only integer <b>K</b> - the position of "Uncle Johny" in the initial playlist.
<p> </p>

<h3>Output</h3>
For each test case, output a single line containing the position of "Uncle Johny" in the sorted playlist.
<p> </p>

<h3>Constraints</h3>
1 ≤ <b>T</b> ≤ 1000
<p> </p>
1 ≤ <b>K</b> ≤ <b>N</b> ≤ 100
<p> </p>
1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4
1 3 4 2
2
5
1 2 3 9 4
5
5
1 2 3 9 4 
1

<b>Output:</b>
3
4
1
</pre>
<p> </p>
<h3>Explanation</h3>

<p>In the example test there are <b>T</b>=3 test cases.</p>

<p><b>Test case 1</b></p>

<p>In the first test case <b>N</b> equals to 4, <b>K</b> equals to 2, <b>A</b> equals to {1, 3, 4, 2}. The answer is <b>3</b>, because {1, 3, 4, 2} -> {1, 2, 3, 4}. <b>A<sub>2</sub></b> now is on the <b>3</b>-rd position.</p>

<p><b>Test case 2</b></p>

<p>In the second test case <b>N</b> equals to 5, <b>K</b> equals to 5, <b>A</b> equals to {1, 2, 3, 9, 4}. The answer is <b>4</b>, because {1, 2, 3, 9, 4} -> {1, 2, 3, 4, 9}. <b>A<sub>5</sub></b> now is on the <b>4</b>-th position.</p>

<p><b>Test case 3</b></p>

<p>In the third test case <b>N</b> equals to 5, <b>K</b> equals to 1, <b>A</b> equals to {1, 2, 3, 9, 4}. The answer is <b>1</b>, because {1, 2, 3, 9, 4} -> {1, 2, 3, 4, 9}. <b>A<sub>1</sub></b> stays on the <b>1</b>-th position.</p>

<h3>Note</h3>

<p><a target="_blank" href="http://www.last.fm/music/The+Killers/_/Uncle+Johny">"Uncle Johny"</a> is a real song performed by The Killers.</p>