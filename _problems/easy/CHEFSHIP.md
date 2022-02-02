---
{"category_name":"easy","problem_code":"CHEFSHIP","problem_name":"Chef, Chefina and Their Friendship","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nabcd\r\naaaa\r\nababcdccdc","output":"0\r\n1\r\n1","explanation":"**Example case 1:** There is no way to choose $T_1$ and $T_2$.\r\n\r\n**Example case 2:** Both $T_1$ and $T_2$ must be \u0022a\u0022.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/W0E8Ge2XmKI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"2-05-2020","tags":{"0":"akashbhalotia","1":"cook118","2":"easy","3":"hashing","4":"knuth","5":"rishup_nitdgp","6":"rishup_nitdgp","7":"strings"},"problem_difficulty_level":"Easy","best_tag":"Knuth Morris Pratt Algorithm","editorial_url":"https://discuss.codechef.com/problems/CHEFSHIP","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSHIP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CHEFSHIP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CHEFSHIP.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CHEFSHIP.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CHEFSHIP.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CHEFSHIP.pdf) as well.

In Chefland, each person has their own non-empty personal string. When two people with personal strings $T_1$ and $T_2$ (possibly identical) become friends in Chefland, their strings are replaced by a new string $S = T_1 + T_1 + T_2 + T_2$, where $+$ denotes string concatenation.

Chef recently became friends with Chefina. However, Chefina's personal string was her favourite and she got upset when it was replaced by $S$. She wanted her personal string back. Chef does not remember $T_1$ and $T_2$ now, he only knows $S$.

Find the number of ways in which Chef can retrieve valid strings $T_1$ and $T_2$ from the given string $S$. It is also possible that Chef does not remember $S$ correctly, in which case there is no way to retrieve $T_1$ and $T_2$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing one integer ― the number of ways to retrieve $T_1$ and $T_2$ from $S$.

### Constraints
- $1 \le T \le 10^4$
- $4 \le |S| \le 10^5$
- $|S|$ is divisible by $2$
- $S$ contains only lowercase English letters
- the sum of $|S|$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
3
abcd
aaaa
ababcdccdc
```

### Example Output
```
0
1
1
```
	
### Explanation
**Example case 1:** There is no way to choose $T_1$ and $T_2$.

**Example case 2:** Both $T_1$ and $T_2$ must be "a".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>