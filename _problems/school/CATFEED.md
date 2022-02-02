---
{"category_name":"school","problem_code":"CATFEED","problem_name":"Chef Feeds Cats","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"7\n3 9\n1 2 3 1 2 3 1 2 3\n3 9\n1 2 3 3 2 1 1 2 3\n3 5\n2 3 1 1 2\n3 6\n2 1 1 3 2 3\n2 8\n1 2 1 2 1 2 1 1\n5 3\n5 3 1\n4 5\n1 2 3 1 4","output":"YES\nYES\nYES\nNO\nNO\nYES\nNO","explanation":"**Example case 4:** Cat $1$ will eat twice before cat $3$ eats even once, so the order is unfair.\n\n**Example case 5:** The order is unfair because cat $1$ will eat its fifth can before cat $2$ eats its fourth can.\n\n**Example case 7:** The order is unfair because cat $1$ will eat twice before cat $4$ eats even once.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/PDXfVSljGg8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"26-09-2019","tags":{"0":"deadwing97","1":"kingofnumbers","2":"ltime76"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CATFEED","time":{"view_start_date":1569690002,"submit_start_date":1569690002,"visible_start_date":1569690002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CATFEED","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME76/hindi/CATFEED.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME76/bengali/CATFEED.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME76/mandarin/CATFEED.pdf), [Russian](https://www.codechef.com/download/translated/LTIME76/russian/CATFEED.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME76/vietnamese/CATFEED.pdf) as well.

Chef owns $N$ cats (numbered $1$ through $N$) and he wants to feed them. There are $M$ identical cans of cat food; each can must be used to feed exactly one cat and Chef can only feed one cat at a time. Chef wrote down the order in which he wants to feed the cats: a sequence $A_1, A_2, \ldots, A_M$.

An order of feeding cats is *fair* if there is no moment where Chef feeds a cat that has already been fed strictly more times than some other cat. Help Chef — tell him if the order in which he wants to feed the cats is fair.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- The second line contains $M$ space-separated integers $A_1, A_2, \ldots, A_M$.

### Output
For each test case, print a single line containing the string `"YES"` if the order is fair or `"NO"` if it is unfair.

### Constraints
- $1 \le T \le 100$
- $2 \le N \le 100$
- $1 \le M \le 10^3$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
7
3 9
1 2 3 1 2 3 1 2 3
3 9
1 2 3 3 2 1 1 2 3
3 5
2 3 1 1 2
3 6
2 1 1 3 2 3
2 8
1 2 1 2 1 2 1 1
5 3
5 3 1
4 5
1 2 3 1 4
```

### Example Output
```
YES
YES
YES
NO
NO
YES
NO
```
### Explanation
**Example case 4:** Cat $1$ will eat twice before cat $3$ eats even once, so the order is unfair.

**Example case 5:** The order is unfair because cat $1$ will eat its fifth can before cat $2$ eats its fourth can.

**Example case 7:** The order is unfair because cat $1$ will eat twice before cat $4$ eats even once.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>