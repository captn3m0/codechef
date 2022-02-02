---
{"category_name":"easy","problem_code":"LEMUSIC","problem_name":"Little Elephant and Music","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"laycurse","date_added":"15-04-2012","tags":{"0":"april13","1":"easy","2":"greedy","3":"sorting","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/LEMUSIC","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Little Elephant from the Zoo of Lviv likes listening to music.
</p><p>There are <b>N</b> songs, numbered from <b>1</b> to <b>N</b>, in his MP3-player. The song <b>i</b> is described by a pair of integers <b>B<sub>i</sub></b> and <b>L<sub>i</sub></b> - the band (represented as integer) that performed that song and the length of that song in seconds. The Little Elephant is going to listen all the songs exactly once in some order.
</p><p>The sweetness of the song is equal to the product of the length of that song and the number of different bands listened before (including the current playing song).
</p><p>Help the Little Elephant to find the order that maximizes the total sweetness of all <b>N</b> songs. Print that sweetness.

<h3>Input</h3>
</p><p>
The first line of the input contains single integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow. The first line of each test case contains single integer <b>N</b>, denoting the number of the songs. The next <b>N</b> lines describe the songs in the MP3-player. The <b>i</b>-th line contains two space-sparated integers <b>B<sub>i</sub></b> and <b>L<sub>i</sub></b>.

<h3>Output</h3>
</p><p>For each test, output the maximum total sweetness.

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 5</b></li>
<li><b>1 ≤ N ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>1 ≤ B<sub>i</sub>, L<sub>i</sub> ≤ 1000000000 (10<sup>9</sup>)</b></li>
</ul>

<h3>Example</h3>

<pre>
<b>Input:</b>
2
3
1 2
2 2
3 2
3
2 3
1 2
2 4

<b>Output:</b>
12
16
</pre>

<h3>Explanation</h3>
</p><p>In the first sample: if he listens the songs in given order, then<br /><b>B<sub>1</sub>=1, L<sub>1</sub>=2</b>: the sweetness = <b>2</b> * <b>1</b> = <b>2</b><br /><b>B<sub>2</sub>=2, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>2</b> = <b>4</b><br /><b>B<sub>3</sub>=3, L<sub>3</sub>=2</b>: the sweetness = <b>2</b> * <b>3</b> = <b>6</b><br />So the total sweetness is <b>12</b>. In this case, you can check the total sweetness does not depend on the order of the songs.</p>
<p>In the second sample: if he listens the songs in given order, then<br /><b>B<sub>1</sub>=2, L<sub>1</sub>=3</b>: the sweetness = <b>3</b> * <b>1</b> = <b>3</b><br /><b>B<sub>2</sub>=1, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>2</b> = <b>4</b><br /><b>B<sub>3</sub>=2, L<sub>3</sub>=4</b>: the sweetness = <b>4</b> * <b>2</b> = <b>8</b><br />So the total sweetness is <b>15</b>. However, he listens the song <b>2</b> firstly, then<br /><b>B<sub>2</sub>=1, L<sub>2</sub>=2</b>: the sweetness = <b>2</b> * <b>1</b> = <b>2</b><br /><b>B<sub>1</sub>=2, L<sub>1</sub>=3</b>: the sweetness = <b>3</b> * <b>2</b> = <b>6</b><br /><b>B<sub>3</sub>=2, L<sub>3</sub>=4</b>: the sweetness = <b>4</b> * <b>2</b> = <b>8</b><br />So the total sweetness is <b>16</b>, and it is the maximum total sweetness.</p>