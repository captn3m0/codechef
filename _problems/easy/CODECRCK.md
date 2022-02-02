---
{"category_name":"easy","problem_code":"CODECRCK","problem_name":"Cracking the Code","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"minimario","problem_tester":"kevinsogo","date_added":"26-07-2015","tags":{"0":"easy","1":"math","2":"minimario","3":"sept15"},"editorial_url":"http://discuss.codechef.com/problems/CODECRCK","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/CODECRCK.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/CODECRCK.pdf">Russian</a>.Translations in Vietnamese to be uploaded soon.</h3>
<p>Wet Shark once had 2 sequences: </p>
<p><b>{a_n}= {a_1, a_2, a_3, ... , a_(10<sup>9</sup>)} </b> <br />
<b>{b_n} = {b_1, b_2, b_3, ... , b_(10<sup>9</sup>)} </b> </p>
<p>However, he only kept one element from each sequence. Luckily, both the elements that Wet Shark kept have the same index in Wet Shark's sequences: that is, he took <b>a_i</b> and <b>b_i</b> for some <b>1 ≤ i ≤ 10<sup>9</sup></b>. </p>
<p>Right after Wet Shark loses his sequences, he finds that he actually needs them to break the code of <a href = "https://en.wikipedia.org/wiki/Cthulhu">Cthulhu</a> to escape a labyrinth. Cthulhu's code is a single floating point number <b>Q</b>. However, the code verifier is faulty. If Wet Shark enters any code <b>c</b> such that <b>|c - Q| ≤ 0.01 </b>, Cthulhu's code checker will allow him to escape.</p>
<p>Wet Shark now starts to panic, and consults Dry Dolphin for help via ultrasonic waves. After the Dry Dolphin Sequence Processing Factory processes data of Wet Shark's sequences, the machines give Wet Shark the following 2 relations his sequences follow for all 1 ≤ n &lt; 10<sup>9</sup>, where <b>x = sqrt(2)</b> and <b>y = sqrt(3)</b>.
</p><p>
<img src="http://i.imgur.com/Vvynmuh.png" />
</p>
<p>Wet Shark is now clueless on how to compute anything, and asks you for help.</p>
<p>Wet Shark has discovered that Cthulhu's code is actually defined as <b>Q = (a_k + b_k) / (2^s)</b>, where <b>s</b> is a predetermined number, <b>k</b> is the index of another element in Wet Shark's sequence, and <b>a_k</b>, <b>b_k</b> are precisely the <b>k</b><sup>th</sup> elements of Wet Shark's sequences <b>{a_n}</b> and <b>{b_n}</b>, respectively.</p>
<p>Given <b>k</b>, <b>i</b>, and the 2 elements of the arrays Wet Shark has lost, find any value of the code <b>c</b> that will allow Wet Shark to exit Cthulhu's labyrinth.</p>
<h3>Input</h3>
<p>The first line of input contains 3 space separated integers <b>i, k, s</b> — the common index of the two elements Wet Shark kept, the index of Wet Shark's array needed to break Cthulhu's code, and the number <b>s</b> described in the problem statement, respectively. It is guaranteed that Cthulhu's code, Q, is between -10<sup>9</sup> and 10<sup>9</sup> (both inclusive).</p>
<p>The second line of the input contains 2 space separated integers <b>a_i</b> and <b>b_i</b>, representing the <b>i</b><sup>th</sup> element of sequence <b>{a_n}</b> and the <b>i</b><sup>th</sup> element of sequence <b>{b_n}</b>, respectively.</p>
<h3>Output</h3>
<p>Output any number <b>c</b> that will crack Cthulhu's code. Recall that if Wet Shark enters any code <b>c</b> such that <b>|c - Q| ≤ 0.01 </b>, Cthulhu's code checker will allow him to exit the labyrinth.</p>
<h3> Constraints </h3>
<ul>
<li> <b> SUBTASK 1: 20 POINTS </b> </li>
<li><b> 1 ≤ i ≤ 10<sup>3</sup> </b></li>
<li><b> 1 ≤ k ≤ 10<sup>3</sup>  </b></li>
<li><b> -10<sup>3</sup> ≤ s ≤ 10<sup>3</sup>  </b></li>
<li><b> 1 ≤ a_i, b_i ≤ 10<sup>3</sup> </b></li>
<p><br /></p>
<li> <b> SUBTASK 2: 80 POINTS </b> </li>
<li><b> 1 ≤ i ≤ 10<sup>10</sup> </b></li>
<li><b> 1 ≤ k ≤ 10<sup>10</sup>  </b></li>
<li><b> -10<sup>10</sup> ≤ s ≤ 10<sup>10</sup>  </b></li>
<li><b> 1 ≤ a_i, b_i ≤ 10<sup>10</sup> </b></li>
</ul>
<p>It is guaranteed that -10<sup>10</sup> ≤ Q ≤  10<sup>10</sup>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
1 1 5
4 5

<b>Output:</b>
0.28125

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In this case, <b>a_1</b> = 4, <b>b_1</b> = 5, and <b>s</b> = 5. Cthulhu's code in this case is (<b>a_1</b> + <b>b_1</b>) / (2<sup>s</sup>) = 9/32 = 0.28125.
 </p>
