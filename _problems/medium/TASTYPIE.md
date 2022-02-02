---
{"category_name":"medium","problem_code":"TASTYPIE","problem_name":"Pie Tasting","problemComponents":{"constraints":"- $1 \\leq T \\leq 10$\n- $1 \\leq N \\leq 10^5$","constraintsState":true,"subtasks":"","subtasksState":true,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of test cases. The description of $T$ test cases follows.\n- Each test case consists of a single line containing one integer $N$ — the number of pies.","inputFormatState":true,"outputFormat":"For each test case, print a single line containing $N$ space-separated integers, the $i^{th}$ of which is the expected number of steps Chef needs to eat the $i^{th}$ pie.","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"2\n3\n7","output":"750000007 500000006 750000007\n859375008 593750008 390625008 312500008 390625008 593750008 859375008 \n","explanation":"**Test case $1$:** \n\nThere are $3$ ways of eating the $1^{st}$ pie:\n- $(1)$ : The probability of this ordering is $\\frac{1}{2}$ and number of steps is $1$\n- $(3, 1)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $2$\n- $(3, 2, 1)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $3$\n\nTherefore, the expected number of steps for the $1^{st}$ pie is $\\frac{1}{2} \\cdot 1 + \\frac{1}{4} \\cdot 2 + \\frac{1}{4} \\cdot 3 = \\frac{7}{4}$\n\nThere are $4$ ways of eating the $2^{nd}$ pie:\n- $(1, 2)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $2$\n- $(3, 2)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $2$\n- $(1, 3, 2)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $3$\n- $(3, 1, 2)$ : The probability of this ordering is $\\frac{1}{4}$ and number of steps is $3$\n\nTherefore, the expected number of steps for the $2^{nd}$ pie is $\\frac{1}{4} \\cdot 2 + \\frac{1}{4} \\cdot 2 + \\frac{1}{4} \\cdot 3 + \\frac{1}{4} \\cdot 3 = \\frac{5}{2}$","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"singlabharat","problem_tester":"aryanc403","date_added":"5-07-2021","tags":{"0":"combinatorics","1":"expected","2":"medium","3":"singlabharat","4":"start22"},"problem_difficulty_level":"Medium","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/TASTYPIE","time":{"view_start_date":1642613400,"submit_start_date":1642613400,"visible_start_date":1642613400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TASTYPIE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef, who is a chef by profession as well, has created $N$ pies (enumerated $1$ through $N$), and has placed them in a row. Now he wants to taste all the pies. But by following a peculiar order of tasting.

In each tasting, he may decide (randomly and independently) to eat either the current leftmost pie or the rightmost pie, and eats that pie.

Eg: If $N = 7$, then one valid order of tasting the pies is $(1, 2, 7, 3, 4, 6, 5)$

But he can't wait to taste all of them, so for each $i$ $(1 \leq i \leq N)$, he wants to know the **expected value** of the number of tasting at which he'll eat the $i^{th}$ pie.

Obviously, you'll have to do this for him because he's busy eating!

### Input
- First line contains $T$ - the number of test cases
- Each test case contains $N$ -  the number of pies he made

### Output
For each test case, print $N$ numbers, the expected number of tastings after which he'll eat the $i^{th}$ pie.

### Constraints
- $1 \leq T \leq 3$
- $1 \leq N \leq 10^3$

### Sample Input
```
1
3
```

### Sample Output
```
1.75 2.5 1.75
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>