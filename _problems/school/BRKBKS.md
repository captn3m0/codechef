---
{"category_name":"school","problem_code":"BRKBKS","problem_name":"Breaking Bricks","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1 2 2\r\n2 1 1 1\r\n3 2 2 1","output":"2\r\n2\r\n2","explanation":"**Example case 1:** Ada can reverse the stack and then hit it two times. Before the first hit, the widths of bricks in the stack (from top to bottom) are $(2,2,1)$. After the first hit, the topmost brick breaks and the stack becomes $(2,1)$. The second hit breaks both remaining bricks.\r\n\r\nIn this particular case, it is also possible to hit the stack two times without reversing. Before the first hit, it is $(1, 2, 2)$. The first hit breaks the two bricks at the top (so the stack becomes $(2)$) and the second hit breaks the last brick.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"14-12-2019","tags":{"0":"alei","1":"alei","2":"cakewalk","3":"conditional","4":"jan20","5":"observation","6":"vijju123"},"problem_difficulty_level":"Cakewalk","best_tag":"Conditional Statement","editorial_url":"https://discuss.codechef.com/problems/BRKBKS","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BRKBKS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/BRKBKS.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/BRKBKS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/BRKBKS.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/BRKBKS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/BRKBKS.pdf) as well.

For her next karate demonstration, Ada will break some bricks.

Ada stacked three bricks on top of each other. Initially, their widths (from top to bottom) are $W_1, W_2, W_3$.

Ada's strength is $S$. Whenever she hits a stack of bricks, consider the largest $k \ge 0$ such that the sum of widths of the topmost $k$ bricks does not exceed $S$; the topmost $k$ bricks break and are removed from the stack. Before each hit, Ada may also decide to reverse the current stack of bricks, with no cost.

Find the minimum number of hits Ada needs in order to break all bricks if she performs the reversals optimally. You are not required to minimise the number of reversals.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $S$, $W_1$, $W_2$ and $W_3$.

### Output
For each test case, print a single line containing one integer ― the minimum required number of hits.

### Constraints 
- $1 \le T \le 64$
- $1 \le S \le 8$
- $1 \le W_i \le 2$ for each valid $i$
- it is guaranteed that Ada can break all bricks

### Subtasks
**Subtask #1 (50 points):** $W_1 = W_2 = W_3$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
3 1 2 2
2 1 1 1
3 2 2 1
```

### Example Output
```
2
2
2
```	

### Explanation
**Example case 1:** Ada can reverse the stack and then hit it two times. Before the first hit, the widths of bricks in the stack (from top to bottom) are $(2,2,1)$. After the first hit, the topmost brick breaks and the stack becomes $(2,1)$. The second hit breaks both remaining bricks.

In this particular case, it is also possible to hit the stack two times without reversing. Before the first hit, it is $(1, 2, 2)$. The first hit breaks the two bricks at the top (so the stack becomes $(2)$) and the second hit breaks the last brick.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>