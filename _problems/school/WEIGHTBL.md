---
{"category_name":"school","problem_code":"WEIGHTBL","problem_name":"Weight Balance","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n1 2 1 2 2\r\n2 4 1 2 2\r\n4 8 1 2 2\r\n5 8 1 2 2\r\n1 100 1 2 2","output":"0\r\n1\r\n1\r\n1\r\n0","explanation":"**Example case 1:** Since the increase in Chef\u0027s weight is $2 - 1 = 1$ kg and that is less than the minimum possible increase $1 \\cdot 2 = 2$ kg, the scale must be faulty.\r\n\r\n**Example case 2:** Since the increase in Chef\u0027s weight is $4 - 2 = 2$ kg, which is equal to the minimum possible increase $1 \\cdot 2 = 2$ kg, the scale is showing correct results.\r\n\r\n**Example case 3:** Since the increase in Chef\u0027s weight is $8 - 4 = 4$ kg, which is equal to the maximum possible increase $2 \\cdot 2 = 4$ kg, the scale is showing correct results.\r\n\r\n**Example case 4:** Since the increase in Chef\u0027s weight $8 - 5 = 3$ kg lies in the interval $[1 \\cdot 2, 2 \\cdot 2]$ kg, the scale is showing correct results.\r\n\r\n**Example case 5:** Since the increase in Chef\u0027s weight is $100 - 1 = 99$ kg and that is more than the maximum possible increase $2 \\cdot 2 = 4$ kg, the weight balance must be faulty.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/lND1oj2ynZ8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"18-03-2021","tags":{"0":"cakewalk","1":"cook127","2":"daanish_adm","3":"math"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/WEIGHTBL","time":{"view_start_date":1616351402,"submit_start_date":1616351402,"visible_start_date":1616351402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WEIGHTBL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK127/mandarin/WEIGHTBL.pdf), [Russian](https://www.codechef.com/download/translated/COOK127/russian/WEIGHTBL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK127/vietnamese/WEIGHTBL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK127/bengali/WEIGHTBL.pdf) as well.

No play and eating all day makes your belly fat. This happened to Chef during the lockdown. His weight before the lockdown was $w_1$ kg (measured on the most accurate hospital machine) and after $M$ months of lockdown, when he measured his weight at home (on a regular scale, which can be inaccurate), he got the result that his weight was $w_2$ kg ($w_2 \gt w_1$).

Scientific research in all growing kids shows that their weights increase by a value between $x_1$ and $x_2$ kg (inclusive) per month, but not necessarily the same value each month. Chef assumes that he is a growing kid. Tell him whether his home scale could be giving correct results.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains five space-separated integers $w_1$, $w_2$, $x_1$, $x_2$ and $M$. 

### Output
For each test case, print a single line containing the integer $1$ if the result shown by the scale can be correct or $0$ if it cannot.

### Constraints
- $1 \leq T \leq 10^5$
- $1 \leq w_1 \lt w_2 \leq 100$
- $0 \leq x_1 \leq x_2 \leq 10$
- $1 \leq M \leq 10$

### Example Input
```
5
1 2 1 2 2
2 4 1 2 2
4 8 1 2 2
5 8 1 2 2
1 100 1 2 2
```

### Example Output
```
0
1
1
1
0
```

### Explanation
**Example case 1:** Since the increase in Chef's weight is $2 - 1 = 1$ kg and that is less than the minimum possible increase $1 \cdot 2 = 2$ kg, the scale must be faulty.

**Example case 2:** Since the increase in Chef's weight is $4 - 2 = 2$ kg, which is equal to the minimum possible increase $1 \cdot 2 = 2$ kg, the scale is showing correct results.

**Example case 3:** Since the increase in Chef's weight is $8 - 4 = 4$ kg, which is equal to the maximum possible increase $2 \cdot 2 = 4$ kg, the scale is showing correct results.

**Example case 4:** Since the increase in Chef's weight $8 - 5 = 3$ kg lies in the interval $[1 \cdot 2, 2 \cdot 2]$ kg, the scale is showing correct results.

**Example case 5:** Since the increase in Chef's weight is $100 - 1 = 99$ kg and that is more than the maximum possible increase $2 \cdot 2 = 4$ kg, the weight balance must be faulty.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>