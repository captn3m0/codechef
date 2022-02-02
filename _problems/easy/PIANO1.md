---
{"category_name":"easy","problem_code":"PIANO1","problem_name":"Chef and Piano Scales","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"24-02-2015","tags":{"0":"april15","1":"loops","2":"simple","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/PIANO1","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/PIANO1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/PIANO1.pdf">Russian</a>.</h3>
<p>Recently, Chef got obsessed with piano. He is a just a rookie in this stuff and can not move his fingers from one key to other fast enough. He discovered that the best way to train finger speed is to play scales.</p>
<p>There are different kinds of scales which are divided on the basis of their interval patterns. For instance, major scale is defined by pattern <b>T-T-S-T-T-T-S</b>, where <b>‘T’</b> stands for a whole tone whereas <b>‘S’</b> stands for a semitone. Two semitones make one tone. To understand how they are being played, please refer to the below image of piano’s octave – two consecutive keys differ by one semitone.</p>
<p>If we start playing from first key (note <i>C</i>), then we’ll play all white keys in a row (notes <i>C-D-E-F-G-A-B-C</i> – as you can see <i>C</i> and <i>D</i> differ for a tone as in pattern, and <i>E</i> and <i>F</i> differ for a semitone).</p>
<p>This pattern could be played some number of times (in cycle).</p>
<p><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/15/PianoKeyboard.svg/250px-PianoKeyboard.svg.png" /></p>
<p>Each time Chef takes some type of a scale and plays using some number of octaves. Sometimes Chef can make up some scales, so please don’t blame him if you find some scale that does not exist in real world.</p>
<p><i>Formally</i>, you have a set of <b>12</b> keys (i.e. one octave) and you have <b>N</b> such sets in a row. So in total, you have <b>12*N</b> keys. You also have a pattern that consists of letters <i>'T'</i> and <i>'S'</i>, where <i>'T'</i> means move forward for two keys (from key <b>x</b> to key <b>x + 2</b>, and <i>'S'</i> means move forward for one key (from key <b>x</b> to key <b>x + 1</b>).</p>
<p>Now, you can start playing from any of the <b>12*N</b> keys. In one play, you can repeat the pattern as many times as you want, but you cannot go outside the keyboard.</p>
<p>Repeating pattern means that if, for example, you have pattern <i>STTST</i>, you can play <i>STTST</i> as well as <i>STTSTSTTST</i>, as well as <i>STTSTSTTSTSTTST</i>, as well as any number of repeating. For this pattern, if you choose to repeat it once, if you start at some key <b>x</b>, you'll press keys: <b>x (letter 'S')-> x + 1 (letter 'T')-> x + 3 (letter 'T')-> x + 5 (letter 'S') -> x + 6 (letter 'T')-> x + 8</b>. Also <b>1 ≤ x, x + 8 ≤ 12*N</b> so as to avoid going off the keyboard.</p>
<p>You are asked to calculate number of different plays that can be performed. Two plays differ if and only if they start at different keys or patterns are repeated different number of times.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
First line of each test case contains scale’s pattern – string <b>s</b> consisting of letters <b>‘T’</b> and <b>‘S’</b> only.<br />
Second line contains one integer <b>N</b> – number of octaves he’ll be using.
</p>
<h3>Output</h3>
<p>For each test case output a single number in a line corresponding to number of different scales he’ll play. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>7</b></li>
</ul>
<h3>Subtasks</h3>
<p>Subtask 1: <b>T &lt; 10 <sup>4</sup>, N = 1 </b>
</p>
<p>Subtask 2: No additional constraints.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2 
TTTT
1
TTSTTTS
3

<b>Output:</b>
4
36

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In the first case there is only one octave and Chef can play scale (not in cycle each time) starting with notes <i>C, C#, D, D#</i> - four together.</p>
