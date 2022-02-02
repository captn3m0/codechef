---
{"category_name":"school","problem_code":"SPLITIT","problem_name":"Split the Str Ing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n6\r\ncabdab\r\n21\r\nyourcrushlovesyouback\r\n16\r\nwubbalubbadubdub\r\n5\r\nsplit\r\n7\r\nsplitit","output":"YES\r\nNO\r\nYES\r\nNO\r\nYES","explanation":"**Example case 1:** We can choose \u0022cabd\u0022 as $A$ and \u0022ab\u0022 as $B$. We can see that $A + B = S$ and $B$ is a substring of $A$.\r\n\r\n**Example case 2:** It is impossible to find two strings which satisfy the constraints. For example, when $A$ is \u0022yourcrushlovesyou\u0022 and $B$ is \u0022back\u0022, then $A + B = S$, but $B$ is not a substring of $A$.\r\n\r\n**Example case 3:** We can choose \u0022wubbalubbadub\u0022 as $A$ and \u0022dub\u0022 as $B$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/thJDCX35gts","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"5-10-2020","tags":{"0":"ad","1":"cook123","2":"greedy","3":"psychik","4":"simple","5":"sjshohag","6":"sjshohag"},"problem_difficulty_level":"Simple","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/SPLITIT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SPLITIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK123/hindi/SPLITIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK123/mandarin/SPLITIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK123/russian/SPLITIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK123/vietnamese/SPLITIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK123/bengali/SPLITIT.pdf) as well.

You are given a string $S$ with length $N$. Determine if it is possible to find two non-empty strings $A$ and $B$ which satisfy the following conditions:
- $A + B = S$, where $+$ denotes string concatenation
- $B$ is a substring of $A$

Note: $B$ is a substring of $A$ if $B$ can be obtained from $A$ by deleting several (possibly zero) characters from the beginning and several (possibly zero) characters from the end. For example, "ab" is a substring of "cabd", but "ad" is not.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to find strings $A$ and $B$ satisfying the given conditions or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 10^4$
- $2 \le N \le 10^5$
- $|S| = N$
- $S$ contains only lowercase English letters
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
5
6
cabdab
21
yourcrushlovesyouback
16
wubbalubbadubdub
5
split
7
splitit
```

### Example Output
```
YES
NO
YES
NO
YES
```

### Explanation
**Example case 1:** We can choose "cabd" as $A$ and "ab" as $B$. We can see that $A + B = S$ and $B$ is a substring of $A$.

**Example case 2:** It is impossible to find two strings which satisfy the constraints. For example, when $A$ is "yourcrushlovesyou" and $B$ is "back", then $A + B = S$, but $B$ is not a substring of $A$.

**Example case 3:** We can choose "wubbalubbadub" as $A$ and "dub" as $B$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>