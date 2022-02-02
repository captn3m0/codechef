---
{"category_name":"school","problem_code":"DSTAPLS","problem_name":"Distribute Apples","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n5 1\n4 2\n10 10","output":"NO\nNO\nYES","explanation":"**Example case 1:** No matter who is hired, all apples will be in the only box at the end.\n\n**Example case 2:** At the end, there will be two apples in each box.\n\n**Example case 3:** If we hire the first candidate, there will be one apple in each box, but if we hire the second one, there will be $10$ apples in one box and none in all other boxes.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/6AGb0xnZr38","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"y__y","problem_tester":"","date_added":"5-07-2019","tags":{"0":"aug19","1":"math","2":"observation","3":"simple","4":"vijju123","5":"y__y"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DSTAPLS","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DSTAPLS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/DSTAPLS.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/DSTAPLS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/DSTAPLS.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/DSTAPLS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/DSTAPLS.pdf) as well.

Yesterday, Chef found $K$ empty boxes in the cooler and decided to fill them with apples. He ordered $N$ apples, where $N$ is a multiple of $K$. Now, he just needs to hire someone who will distribute the apples into the boxes with professional passion. 

Only two candidates passed all the interviews for the box filling job. In one minute, each candidate can put $K$ apples into boxes, but they do it in different ways: the first candidate puts exactly one apple in each box, while the second one chooses a random box with the smallest number of apples and puts $K$ apples in it.

Chef is wondering if the final distribution of apples can even depend on which candidate he hires. Can you answer that question?

Note: The boxes are distinguishable (labeled), while the apples are not. Therefore, two distributions of apples are different if there is a box such that the number of apples in it when the first candidate finishes working can be different from the number of apples in it when the second candidate finishes working.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $K$. 

### Output
For each test case, print a single line containing the string `"YES"` if the final distributions of apples can be different or `"NO"` if they will be the same (without quotes).

### Constraints
- $1 \le T \le 250$
- $1 \le N, K \le 10^{18}$
- $N$ is divisible by $K$

### Subtasks
**Subtask #1 (30 points):** $1 \le N, K \le 10^5$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
5 1
4 2
10 10
```

### Example Output
```
NO
NO
YES
```

### Explanation
**Example case 1:** No matter who is hired, all apples will be in the only box at the end.

**Example case 2:** At the end, there will be two apples in each box.

**Example case 3:** If we hire the first candidate, there will be one apple in each box, but if we hire the second one, there will be $10$ apples in one box and none in all other boxes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>