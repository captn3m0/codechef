---
{"category_name":"easy","problem_code":"SDSTRING","problem_name":"Self-Destructing Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n001101\r\n1101\r\n110","output":"0\r\n1\r\n-1","explanation":"**Example case 1:** We already have a self-destructing string because \u00220**01**101\u0022 can be converted to \u00220**10**1\u0022, to \u0022**01**\u0022 and finally to an empty string.\r\n\r\n**Example case 2:** We can choose $i=3$ (since $s_3 \\neq s_4$) and then invert $s_4$ to obtain \u00221100\u0022, which is a self-destructing string.\r\n\r\n**Example case 3:** It can be shown that \u0022110\u0022 cannot be converted to a self-destructing string.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/V_JCVoIskQ4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jeevanjyot","problem_tester":"","date_added":"11-12-2020","tags":{"0":"cook125","1":"jeevanjyot","2":"observation","3":"rajarshi_basu","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SDSTRING","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SDSTRING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/SDSTRING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/SDSTRING.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/SDSTRING.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/SDSTRING.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/SDSTRING.pdf) as well.

A binary string is called a *self-destructing string* if it can reduced to an empty string by performing the following operation some number of times (possibly zero): Choose a valid integer $i$ such that the $i$-th character of the current string is different from the $i+1$-th character, and remove these two characters from the string.

You are given a binary string $s$. Your task is to convert $s$ to a self-destructing string. To do that, you may perform the following operation any number of times (possibly zero): Choose an integer $i$ ($1 \le i \le |s|-1$) such that the $i$-th character of $s$ is different from the $i+1$-th character, and invert one of these characters (inverting a character means changing '0' to '1' or '1' to '0', e.g. the string "01" can be changed to "00").

Find the smallest number of operations required to convert $s$ to a self-destructing string or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $s$.

### Output
For each test case, print a single line containing one integer ― the smallest required number of operations or $-1$ if it is impossible to convert $s$ to a self-destructing string.

### Constraints
- $1 \le T \le 1,000$
- $1 \le |s| \le 10^6$
- $s$ contains only characters '0' and '1'
- the sum of $|s|$ over all test cases does not exceed $10^6$

### Example Input
```
3
001101
1101
110
```

### Example Output
```
0
1
-1
```

### Explanation
**Example case 1:** We already have a self-destructing string because "0**01**101" can be converted to "0**10**1", to "**01**" and finally to an empty string.

**Example case 2:** We can choose $i=3$ (since $s_3 \neq s_4$) and then invert $s_4$ to obtain "1100", which is a self-destructing string.

**Example case 3:** It can be shown that "110" cannot be converted to a self-destructing string.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>