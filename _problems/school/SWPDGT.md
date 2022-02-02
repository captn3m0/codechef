---
{"category_name":"school","problem_code":"SWPDGT","problem_name":"Chef Swaps Digits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n13 82\r\n9 24\r\n20 30","output":"104\r\n96\r\n50","explanation":"**Example case 1:** Swapping the digits $1$ (from $13$) and $2$ (from $82$) gives us $23$ and $81$. Their sum $23+81 = 104$ is the maximum possible sum.\r\n\r\n**Example case 3:** Swapping is not needed as the original numbers have the maximum possible sum.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/3TENFjLxcTk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"hasinfarhan","problem_tester":"","date_added":"24-03-2020","tags":{"0":"cakewalk","1":"hasinfarhan","2":"ltime82","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SWPDGT","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SWPDGT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/SWPDGT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/SWPDGT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/SWPDGT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/SWPDGT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/SWPDGT.pdf) as well.

Chef has two positive integers $A$ and $B$. He can tamper with them by choosing a digit in the decimal representation of $A$ and a digit in the decimal representation of $B$ and swapping these digits. This operation may be performed at most once.

Find the maximum possible sum of the resulting numbers which Chef can obtain. 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $B$.

### Output
For each test case, print a single line containing one integer ― the maximum sum.

### Constraints
- $1 \le T \le 1,000$
- $1 \le A, B \le 99$

### Example Input
```
3
13 82
9 24
20 30
```

### Example Output
```
104
96
50
```

### Explanation
**Example case 1:** Swapping the digits $1$ (from $13$) and $2$ (from $82$) gives us $23$ and $81$. Their sum $23+81 = 104$ is the maximum possible sum.

**Example case 3:** Swapping is not needed as the original numbers have the maximum possible sum.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>