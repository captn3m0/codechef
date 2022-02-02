---
{"category_name":"school","problem_code":"KOL16J","problem_name":"Quentin Tarantino","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"26-12-2016","tags":{"0":"admin3"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Quentin Tarantino is a famous Hollywood filmmaker and actor. His films have a unique characteristic of connecting with youth by using popular culture references. They are usually divided into various sub-parts denoted by chapters. His plot of stories is never linear, he always make sure that the chapters should never be shown in the order of Chapter 1, Chapter 2, Chapter 3, ,.. Chapter <b>n</b> linearly. He believes doing this an insult to the intelligence of viewers. For example, Chapter 1, Chapter 2, Chapter 3 can never be a chapter sequence in Tarantino's movies.. He can have a sequence of Chapter 2, Chapter 3, Chapter 1 instead.
</p>

<p>
Recently Santa gifted Tom a movie which consists of <b>n</b> chapters. This movie can possibly be directed by your favorite Tarantino or by someone else. Directors in hollywood can sometimes be very sloppy, they sometimes drop some chapters too and stupid they are that they will leave numbering of the chapters as it is and one can easily identify the chapters that were dropped. For example, if you find the sequence of chapters as - chapter 1, chapter 5, chapter 3, don't be surprised, they did not even take burden of renumbering the chapters to chapter 1, chapter 3, chapter 2. They can sometimes repeat the chapter numbers too. Remember that Tarantino is not a sloppy director, so he never makes this kind of stupid mistakes.
</p>


<p>
Tom happened to find the sequence of chapters in the movie, this sequence contains <b>n</b> chapters, <b>i</b>-th of which is denoted by <b>chapter<sub>i</sub></b>. Tom is a big fan of movies of Tarantino. So, Tom  would like to check whether the movie could possibly be directed by Tarantino or not? Please help Tom, he really needs it.
</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b> denoting the number of test cases. <b>T</b> test cases follow.</p>
<p>The first line of each test case contains an integer <b>n</b> denoting number of chapters of the movie.</p>
<p>The second line of each test case contains <b>n</b> space separated integers <b>chapter<sub>i</sub></b>, denoting numbering of <b>i<sup>th</sup></b> chapter.</p>

<h3>Output</h3>
<p>For each test case, output "yes" or "no" in a separate line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>chapter<sub>i</sub></b> ≤ <b>500</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
3
2 3 1
3
1 5 3
3
1 2 3
2
1 1

<b>Output:</b>
yes
no
no
no
</pre>

<h3>Explanation</h3>
<p>All the examples are explained in the problem statement.</p>