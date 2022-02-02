---
{"category_name":"medium","problem_code":"ARIGEOM","problem_name":"Arigeom Beats","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"ankul_iiita","problem_tester":"laycurse","date_added":"29-08-2012","tags":{"0":"ankul_iiita","1":"dec12","2":"medium","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/ARIGEOM","time":{"view_start_date":1355220912,"submit_start_date":1355220912,"visible_start_date":1355218200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Our amazing Chef recently met his best friend Joe at his place. Joe is a musician and owns a wide variety of musical instruments. He got introduced to the Arigeom beats in a music training session at Los Angeles. Arigeom beats, as the name suggests, is a combination of two series of beats. One of them has all its frequencies in <a href="http://en.wikipedia.org/wiki/Arithmetic_progression">arithmetic progression</a> while the other series of beats has all its frequencies in <a href="http://en.wikipedia.org/wiki/Geometric_progression">geometric progression</a>.</p>
<p>A series of beats is represented by a beat notation, which is the sequence of the frequencies at which the beats are played.</p>
<p>To play Arigeom beats, two digital musical instruments are played simultaneously in front of an instrument known as Sono Phone. One instrument plays the beats in arithmetic progression while the other instrument plays the beats in geometric progression. Sono Phone will capture the beats played by each of the two instruments and process them into Arigeom beats. It will merge the beats, sort the beats in ascending order, and remove duplicate beats.</p>
<p>For example, suppose one instruments plays the following beats notation: (2, 5, 8, 11), an arithmetic progression, while the other plays (2, 4, 8, 16), a geometric progression. The resulting Arigeom beat notation recorded by Sono Phone will be (2, 4, 5, 8, 11, 16).</p>
<p>Because Joe knows how to play Arigeom beats, owns the instruments, and has his friend Chef with him as well, he can't wait anymore to play the beats. Joe has an Arigeom beat notation from his music book and decides that he would play the beats in arithmetic progression while Chef will play the beats in geometric progression. The beat notation consists of <b>N</b> beat frequencies <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>N</sub></b>. However, he is now confused as to which subset of the beats has to be played by Chef and which one by himself.</p>
<p>Help Joe and Chef figure out the subsets of beats to be played by Joe and Chef.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. For each test case, the first line contains an integer <b>N</b>. The second line contains <b>N</b> space-separated integers <b>F<sub>1</sub></b>, <b>F<sub>2</sub></b>, ..., <b>F<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output two lines. The first line contain the beat notation to be played by Joe (in arithmetic progression). The second line contain the beat notation to be played by Chef (in geometric progression). Each beat notation must contain at least two beats. The beats in each beat notation must be sorted in ascending order.</p>
<p>If there are more than one possible pair of beat notations, output any one of them.</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 100<br /> 2 ≤ <b>N</b> ≤ 10,000<br /> 1 ≤ <b>F<sub>i</sub></b> ≤ 100,000<br /><b>F<sub>1</sub></b> &lt; <b>F<sub>2</sub></b> &lt; ... &lt; <b>F<sub>N</sub></b><br />It is guaranteed that at least one pair of valid beat notations exists.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4<br/>6<br/>2 4 5 8 11 16<br/>5<br/>1 2 3 4 5<br/>8<br/>1 3 9 10 19 27 28 81<br/>6<br/>1 4 7 10 13 25<br/>

<b>Output:</b>
2 5 8 11<br/>2 4 8 16<br/>1 2 3 4 5<br/>1 2 4<br/>1 10 19 28<br/>1 3 9 27 81<br/>1 7 13<br/>4 10 25<br/><br/>
</br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></pre><h3>Note</h3>
<p>In last example, the common ratio is 2.5 (<b>non-integer</b>) even when all the elements of geometric progression sequence are integers.</p>
