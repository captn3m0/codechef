---
{"category_name":"school","problem_code":"CODERLIF","problem_name":"Coder Life Matters","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-12-2017","tags":{"0":"admin2"},"time":{"view_start_date":1517693400,"submit_start_date":1517693400,"visible_start_date":1517693400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Coders/programmers are the backbone of the new age society (though whether they themselves have a strong back bone is debatable :P). As some wise man said, a task stops being fun when someone starts paying you to do it and commands you. Similarly, though coding is quite fun, in a corporate setting, if the coders work continuously without breaks, they will soon get tired and bored.</p>

<p>You have data about the activities of a programmer over the month of April (which, in case you didn't know, has exactly 30 days). For each day, you know whether the programmer coded on that day or not. If the coder codes consecutively for more than 5 days, she gets bored. Given the activities of the programmer, tell whether she is always a happy person or whether she has gotten bored at some point. If she has been bored, you should support her by outputting "#coderlifematters", otherwise output "#allcodersarefun".</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> cases follow.</p>
<p>The only line of each test case contains 30 space separated boolean integers denoting whether the coder programmed on that day of the month or not. 1 signifies that she coded on that day, and a 0 denotes that she did not.</p>

<h3>Output</h3>
<p>For each test case, output in a single line "#coderlifematters" if the coder has been bored. If not, output "#allcodersarefun".</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 1000</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
4
1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1
0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0
1 1 1 1 1 0 0 1 1 1 1 1 0 0 1 1 1 1 1 0 0 1 1 1 1 1 0 0 1 1
1 1 1 1 1 1 1 0 0 0 0 0 0 0 1 1 1 1 1 1 1 0 0 0 0 0 0 0 1 1

<b>Output</b>
#coderlifematters
#allcodersarefun
#allcodersarefun
#coderlifematters
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: The coder is working all days in the month. She is very bored.</p>

<p><b>Testcase 2</b>: The coder didn't work any day during the month. We shouldn't call such a person a coder, but what matters is that she 
has a job and she is happy and we should chant #allcodersarefun </p>

<p><b>Testcase 3</b>: This is a typical professional coder. She works hard for 5 days, takes a break for 2 days and then works again. She is happy, so why should we be worried, let us chant #allcodersarefun </p>

<p><b>Testcase 4</b>: This seems like a curious case of a programmer, she works 7 days and rests 7 days. Even if she rests well, but as she works for more than 5 days consecutively, her life is still boring (as she doesn't get to party on weekends). So, we shall say #coderlifematters</p>
