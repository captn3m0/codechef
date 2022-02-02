---
{"category_name":"school","problem_code":"SOLBLTY","problem_name":"Solubility","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n40 120 1\r\n35 120 2\r\n40 115 3","output":"1800\r\n2500\r\n2950","explanation":"**Test Case $1$:** Since solubility is increasing with temperature, the maximum solubility will be at $100$ degrees which is equal to $120 + (100 - 40) = 180 \\frac{\\mathrm{g}}{100\\ \\mathrm{mL}}$. \r\n\r\nSo for $1$ liter of water the value is $180 \\cdot 10 = 1800\\ \\mathrm{g}$.\r\n\r\n**Test Case $2$:** Since solubility is increasing with temperature, the maximum solubility will be at $100$ degrees which is equal to $120 + (100 - 35) \\cdot 2 = 250\\frac{\\mathrm{g}}{100\\ \\mathrm{mL}}$. \r\n\r\nSo for $1$ liter of water the value is $250 \\cdot 10 = 2500\\ \\mathrm{g}$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/M6S2MMsH7zY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"4-05-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"may21"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SOLBLTY","time":{"view_start_date":1621243802,"submit_start_date":1621243802,"visible_start_date":1621243802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SOLBLTY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MAY21/bengali/SOLBLTY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY21/mandarin/SOLBLTY.pdf), [Russian](https://www.codechef.com/download/translated/MAY21/russian/SOLBLTY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY21/vietnamese/SOLBLTY.pdf) as well.

Suppose for a unit rise in temperature, the solubility of sugar in water increases by $B \frac{\mathrm{g}}{100\ \mathrm{mL}}$.

Chef does an experiment to check how much sugar (in $\mathrm{g}$) he can dissolve given that he initially has $1$ liter of water at $X$ degrees and the solubility of sugar at this temperature is $A \frac{\mathrm{g}}{100\ \mathrm{mL}}$. Also, Chef doesn't want to lose any water so he can increase the temperature to at most $100$ degrees.

Assuming no loss of water takes place during the process, find the maximum amount of sugar (in $\mathrm{g}$) can be dissolved in $1$ liter of water under the given conditions.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- The only line of each test case contains three integers $X, A, B$. 

###Output
For each testcase, output in a single line the answer to the problem.

###Constraints 
- $1 \leq T \leq 1000$
- $31 \leq X \leq 40$
- $101 \leq A \leq 120$
- $1 \leq B \leq 5$

###Subtasks
**Subtask #1 (100 points):** Original Constraints

###Sample Input
```
3
40 120 1
35 120 2
40 115 3
```

###Sample Output
```
1800
2500
2950
```
	
###Explanation
**Test Case $1$:** Since solubility is increasing with temperature, the maximum solubility will be at $100$ degrees which is equal to $120 + (100 - 40) = 180 \frac{\mathrm{g}}{100\ \mathrm{mL}}$. 

So for $1$ liter of water the value is $180 \cdot 10 = 1800\ \mathrm{g}$.

**Test Case $2$:** Since solubility is increasing with temperature, the maximum solubility will be at $100$ degrees which is equal to $120 + (100 - 35) \cdot 2 = 250\frac{\mathrm{g}}{100\ \mathrm{mL}}$. 

So for $1$ liter of water the value is $250 \cdot 10 = 2500\ \mathrm{g}$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>