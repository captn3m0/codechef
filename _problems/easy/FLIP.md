---
{"category_name":"easy","problem_code":"FLIP","problem_name":"Flip the String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n100001\r\n110111\r\n1010\r\n1010\r\n000\r\n111","output":"2\r\n0\r\n2","explanation":"**Example case 1:** Initially, $A$ is \u0022100001\u0022. We choose the substring \u0022**0**0**0**\u0022 between the $2$-nd and $4$-th character and convert it to \u0022**1**0**1**\u0022.\r\n\r\nNow $A$ becomes \u0022110101\u0022. We choose the string \u0022**0**\u0022 containing only the $5$-th character and convert it to \u0022**1**\u0022.\r\n\r\nFinally, $A$ becomes \u0022110111\u0022, which is equal to $B$.\r\n\r\n**Example case 2:** $A$ and $B$ are initially equal, so there is no need to perform any operation.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/X9pzM18xPsw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gauranggupta","problem_tester":"","date_added":"20-11-2020","tags":{"0":"cook124","1":"gauranggupta","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FLIP","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FLIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/FLIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/FLIP.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/FLIP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/FLIP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/FLIP.pdf) as well.

You are given two binary strings $A$ and $B$ with the same length.

You may perform the following operation any number of times (including zero): pick a substring of $A$ with odd length and invert all the bits (change '0' to '1' or vice versa) at odd positions in this substring. For example, if we choose a substring "**0**1**0**1**1**", we can convert it to "**1**1**1**1**0**" (bits at odd positions are bold).

Determine the minimum number of operations required to change the string $A$ to the string $B$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single string $A$.
- The second line contains a single string $B$.

### Output
For each test case, print a single line containing one integer — the minimum number of operations required.

### Constraints 
- $1 \le T \le 10^3$
- $1 \le |A| = |B| \le 10^5$
- $A$ and $B$ contain only characters '0' and '1'
- the sum of $|A|$ over all test cases does not exceed $10^5$

### Example Input
```
3
100001
110111
1010
1010
000
111
```

### Example Output
```
2
0
2
```

### Explanation
**Example case 1:** Initially, $A$ is "100001". We choose the substring "**0**0**0**" between the $2$-nd and $4$-th character and convert it to "**1**0**1**".

Now $A$ becomes "110101". We choose the string "**0**" containing only the $5$-th character and convert it to "**1**".

Finally, $A$ becomes "110111", which is equal to $B$.

**Example case 2:** $A$ and $B$ are initially equal, so there is no need to perform any operation.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>