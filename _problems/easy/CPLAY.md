---
{"category_name":"easy","problem_code":"CPLAY","problem_name":"Penalty Shoot-out","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shivam496","problem_tester":null,"date_added":"28-11-2017","tags":{"0":"dec17","1":"shivam496"},"editorial_url":"https://discuss.codechef.com/problems/CPLAY","time":{"view_start_date":1512984600,"submit_start_date":1512984600,"visible_start_date":1512984600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/mandarin/CPLAY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/russian/CPLAY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/DEC17/vietnamese/CPLAY.pdf">Vietnamese</a> as well.</h3>

<p> Chef likes to play football with his friends. They played a number of matches and surprisingly, every match was a tie, so they decided to declare the winner with penalty shoot-out. As they didn't know the penalty shoot-out rules, they just decided to take 20 shots alternatively (each team takes 10 shots).</p>

<p>One day, Chef's friend Shivam heard about the matches and got confused. Later Shivam went to Chef and his friends and explained the shoot-out rules. Then, they all decided to calculate and once again declare the winner of each match as per the standard football penalty shoot-out rules.</p>

<p>The standard rules are:
<ul>
<li>The teams will take shots alternatively.</li>
<li>At first, each team will take five penalty shots.</li>
<li>If one team does not have more goals than the other after these five shots, the shoot-out will proceed to sudden death.</li>
<li>In between of first 10 kicks, If one team has an advantage over other which can't be compensated, then the team with the advantage will be declared winner at that instant i.e. before the completion of 10 kicks.</li>
<li>In sudden death, each team will take at most five more shots. Everytime after both teams take a shot, the following rule is used: if one team has scored more goals than the other, that team is the winner.</li>
<li>If each team has taken 10 shots and the winner still cannot be decided, the result will be a tie.</li>
</ul>
</p>

<p>The result of the shoot-out for each game is given as a binary string where '1' represents GOAL and '0' represents MISS. Chef's team always starts first. Keep in mind that the teams alternate when taking the shots — the first character corresponds to the first shot of Chef's team, the second character to the first shot of the opposing team, the third character to the second shot of Chef's team etc.</p>

<p>As there are many matches to evaluate, Chef and his friends are unable to do so and they require your help. You have to tell them the winner of each match.</p>

<p>If a match ended in a tie, print "TIE". If Chef's team won, print "TEAM-A", otherwise print "TEAM-B". Also, if the match didn't end in a tie, print the minimum number of kicks required to decide the result, so that they can also know how much times they shot in vain.</p>


<p>
<b>Note: Input/Output files are large, use fast reading/writing methods</b>
</p>
<h3>Input</h3>
<p><ul>
<li>The input consists of several lines.</li>
<li>Each line contains the record of the shoot-out for a single match in the form of a binary string where '1' represents GOAL and '0' represents MISS, starting from Chef's team alternatively.</li>
</ul></p>

<h3>Output</h3>
<p>On each line, print the winner of the corresponding match ("TEAM-A" or "TEAM-B") and the number of shots required to decide the result, separated by a space. If there is no winner, print "TIE" instead.</p>

<h3>Constraints</h3>
<ul>
<li>each line contains a 20-bit binary string</li>
<li><b>number of matches</b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask 1 (20 points):</b>
<ul>
<li>the first 10 kicks always result in a tie, i.e. the shoot-out will always go to sudden death</li>
<li><b>number of matches</b> ≤ 10<sup>3</sup></li>
</ul>
</p>

<p>
<b>Subtask 2 (80 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

10100101111011111111
00000000000000000000
01011101110110101111

<b>Output:</b>

TEAM-A 12
TIE
TEAM-B 7
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> After 5 turns, the result was a tie and after the 6th turn, the score was 4:3, so Chef's team was the winner and the number of shots required to decide the result was 12.</p>
<p><b>Example case 2:</b> Both teams didn't score any goal, so the match resulted in a tie after 10 turns (20 shots). </p>
<p><b>Example case 3:</b> After 7 shots i.e. 0101110, the score was 1:3. Now, regardless of the following shots, we can say that the winner will always be TEAM-B, so only 7 shots are needed to say that TEAM-B is the winner.</p>