---
{"category_name":"medium","problem_code":"KOL16A","problem_name":"Playing World War II","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.4"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kol_adm","problem_tester":null,"date_added":"21-12-2016","tags":{"0":"kol_adm"},"time":{"view_start_date":1482831600,"submit_start_date":1482831600,"visible_start_date":1482831600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Enigma: The military machine used by Nazi Germany to encipher messages before and during World War II. The code of Enigma was broken once by Polish Cipher Bureau in 1932 and then again, during the war, by the Codebreaker team at Bletchley Park, England. Because of this, the Allied Powers were able to intercept a lot of messages transferred by German military and knew their battle plans. It is said that, breaking of Enigma shortened the length of that war by two years. </p>
<p>But, in the time of war, Allies were gravely concerned about the possibility of Germans finding out this security breach and resetting their communication system. They were very disciplined about using the information in order to hide this source of intelligence. Their precautions included leading fake invasions, superfluous search missions and attacking only after creating a proper cover story. Even at times, they considered sabotaging own resources during a battle which resulted in the death toll of hundreds of soldiers, civilians and massive loss on supplies; just to avoid any suspicion!</p>
<p>It seems like they played with probabilities leaving peoples’ lives hanging on the decision.</p>
<p>Cruel, wasn’t it? Can you do it?</p>
<p>There are <b>N</b> battles ahead. The probability that Allies will win the i<sup>th</sup> battle is <b>P<sub>i</sub></b>. 
<p>The enemies are calculating a value <b>PEB (Probability that Enigma has been broken)</b>. If the allies win a battle, the value of PEB increases; if the enemy wins the battle, the value decreases. If the value of PEB gets too high, the enemy will become suspicious and replace Enigma with something else.</p>
<p><b>PEB</b> is calculated as an average from results of all previous battles using the following method.</p>
<p>
<pre>
total := 0
foreach Battle, b<sub>i</sub>
	if Allies win
		total += probability of Allies losing in b<sub>i</sub>
	else
		total -= probability of Allies winning in b<sub>i</sub>
PEB = max(total / no. of battles, 0)
</pre>
</p>
<p>As the Allies already deciphered Enigma, they can choose to win or lose any battle they want. Consider the following scenario as example:</p>

<img src="https://www.codechef.com/download/upload/ACM16KOL/A.png" height="120" width="550">

<br/>
<p></p>
<p>Some battles are more important than others; the i<sup>th</sup> battle has an Impact Factor <b>F<sub>i</sub></b>. As a war analyst, your job is to maximize the sum of Impact Factors of all the battles won. But the enemies must not know that Allies have deciphered Enigma, so you must keep PEB less than a certain <b>threshold, S</b>; throughout the whole war.</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains an integer <b>T (1 ≤ T ≤ 100)</b> denoting the number of test cases. Each test case contains 4 lines: </li>
<li>The first line contains one integer <b>N (1 ≤ N ≤ 100)</b> denoting the number of battles. </li> 
    <li>The second line contains <b>N</b> space-separated real numbers <b>P<sub>1</sub>,P<sub>2</sub>,....,P<sub>n</sub></b> (probability of the Allies winning in i<sup>th</sup> battle) <b>0.00 ≤ P<sub>i</sub> ≤ 1.00</b>.</li>
    <li>The third line contains <b>N</b> space-separated integers <b>F<sub>1</sub>,F<sub>2</sub>,...,F<sub>n</sub></b> (Impact factor of the i<sup>th</sup> battle). Here <b>1 ≤ F<sub>i</sub> ≤ 10000</b></li>
<li>The fourth line contains a real number denoting threshold, <b>S (0.00 < S ≤ 1.00)</b>.</li>

</ul>


<p>The real numbers contain at most 2 digits after the decimal point.</p>


<h3>Output</h3>
<p>For each test case, print case number and the maximum sum of impact factors.</p>


<h3>Sample </h3>
<pre><b>Input</b>     

2
2
0.8 0.9
100 200
1
4
0.28 0.62 0.92 0.96
3 8 7 2
0.05

<b>Output</b>
Case 1: 300
Case 2: 9
</pre>
