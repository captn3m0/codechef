---
{"category_name":"easy","problem_code":"EXERCISE","problem_name":"Fitness Exercises ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n6\r\n7 5 -1 -1 -1 10\r\n\u003E\u003E=\u003E\u003E\r\n6\r\n7 5 -1 -1 -1 10\r\n\u003E\u003E=\u003C\u003E\r\n2\r\n0 -1\r\n\u003E\r\n5\r\n5 -1 -1 -1 10\r\n\u003C\u003C\u003C\u003C\r\n5\r\n5 -1 -1 -1 8\r\n\u003C\u003C\u003C\u003C","output":"NO\r\nYES\r\nNO\r\nYES\r\nNO","explanation":"**Example case 1:** The number of minutes Chef spent exercising on day $5$ must be bigger than $10$ and smaller than $5$, which is impossible.\r\n\r\n**Example case 3:** Chef must have exercised for a negative number of minutes on day $2$, which is not allowed.\r\n\r\n**Example case 5:** The information is inconsistent because Chef only exercises for an integer number of minutes on each day. Since the number of minutes he spent exercising on each day must be increasing, he must have spent at least $6$ minutes on day $2$, at least $7$ minutes on day $3$, at least $8$ on day $4$ and at least $9$ on day $5$, but $A_5 = 8$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"21-09-2019","tags":{"0":"cook110","1":"easy","2":"implementation","3":"kingofnumbers","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXERCISE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXERCISE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Recently, Chef has noticed that he is becoming fatter than ever. It is not surprising, as Chef is eating a lot of the food he is cooking. Therefore, he has been doing exercises for the last $N$ days (numbered $1$ through $N$). For some of these days, Chef remembers for how many minutes he exercised. You are given a sequence $A_1, A_2, \ldots, A_N$. For each valid $i$, if $A_i \ge 0$, then Chef exercised for $A_i$ minutes on the $i$-th day; otherwise, Chef forgot how long he exercised on the $i$-th day and $A_i = -1$. Note that Chef could only have exercised for an integer non-negative number of minutes on each day, including the days he does not remember.

Chef can also compare how long he exercised on each two consecutive days. You are given a string $S$ with length $N-1$. For each valid $i$, the $i$-th character of $S$ is one of the following:
- '>' if Chef exercised for strictly more minutes on the $i$-th day than on the $(i+1)$-th day
- '=' if Chef exercised for an equally long time on the $i$-th day and on the $(i+1)$-th day
- '<' if Chef exercised for strictly more minutes on the $(i+1)$-th day than on the $i$-th day

Chef is doubting his memory, so he wants you to check if the information is consistent, i.e. if there is a way to determine for how many minutes Chef exercised on each day he does not remember such that the string $S$ describes the correct comparison operators.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains a single string $S$.

### Output
For each test case, if the information on the input is inconsistent, print a single line containing the string `"NO"`, otherwise output  `"YES"`

### Constraints 
- $1 \le T \le 1,000$
- $2 \le N \le 10^5$
- $-1 \le A_i \le 10^6$ for each valid $i$
- $|S| = N-1$
- $S$ contains only characters '<', '>' and '='
- for each valid $i$, if $A_i \neq -1$ and $A_{i+1} \neq -1$, then the $i$-th character of $S$ is consistent with $A_i$ and $A_{i+1}$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
5
6
7 5 -1 -1 -1 10
>>=>>
6
7 5 -1 -1 -1 10
>>=<>
2
0 -1
>
5
5 -1 -1 -1 10
<<<<
5
5 -1 -1 -1 8
<<<<
```

### Example Output
```
NO
YES
NO
YES
NO
```

### Explanation
**Example case 1:** The number of minutes Chef spent exercising on day $5$ must be bigger than $10$ and smaller than $5$, which is impossible.

**Example case 3:** Chef must have exercised for a negative number of minutes on day $2$, which is not allowed.

**Example case 5:** The information is inconsistent because Chef only exercises for an integer number of minutes on each day. Since the number of minutes he spent exercising on each day must be increasing, he must have spent at least $6$ minutes on day $2$, at least $7$ minutes on day $3$, at least $8$ on day $4$ and at least $9$ on day $5$, but $A_5 = 8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>