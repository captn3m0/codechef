---
{"category_name":"school","problem_code":"CHEALG","problem_name":"Check Algorithm","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nbbbbbbbbbbaa\r\nc\r\naaaaaaaaaabcdefgh","output":"YES\r\nNO\r\nNO","explanation":"**Example case 1:**\r\n- The compressed string of \u0022bbbbbbbbbbaa\u0022 is \u0022b10a2\u0022, which is shorter.\r\n- The compressed string of \u0022c\u0022 is \u0022c1\u0022, which is not shorter than \u0022c\u0022.\r\n- The compressed string of \u0022aaaaaaaaaabcdefgh\u0022 is \u0022a10b1c1d1e1f1g1h1\u0022, which is not shorter than \u0022aaaaaaaaaabcdefgh\u0022 (both strings have length $17$).","isDeleted":false}}},"video_editorial_url":"https://youtu.be/jimd9infs5s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":"","date_added":"26-12-2019","tags":{"0":"deadwing97","1":"easy","2":"i_love_islam","3":"implementation","4":"ltime79"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEALG","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEALG","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/CHEALG.pdf),[Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/CHEALG.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/CHEALG.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/CHEALG.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/CHEALG.pdf) as well.

One day, Saeed was teaching a string compression algorithm. This algorithm finds all maximal substrings which contains only one character repeated one or more times (a substring is maximal if it we cannot add one character to its left or right without breaking this property) and replaces each such substring by the string "cK", where $K$ is the length of the substring and $c$ is the only character it contains. For example, "aabaaa" is compressed to "a2b1a3".

Saeed wanted to check if the students understood the algorithm, so he wrote a string $S$ on the board and asked the students if the algorithm is effective on $S$, i.e. if the string created by compressing $S$ is strictly shorter than $S$. Help them answer this question.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$.

### Output
For each test case, print a single line containing the string `"YES"` if the algorithm is effective on $S$ or `"NO"` if it is not.

### Constraints
- $1 \le T \le 100$
- $1 \le |S| \le 10^3$
- $S$ may consist of only lowercase English letters.

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
bbbbbbbbbbaa
c
aaaaaaaaaabcdefgh
```

### Example Output
```
YES
NO
NO
```

### Explanation
**Example case 1:**
- The compressed string of "bbbbbbbbbbaa" is "b10a2", which is shorter.
- The compressed string of "c" is "c1", which is not shorter than "c".
- The compressed string of "aaaaaaaaaabcdefgh" is "a10b1c1d1e1f1g1h1", which is not shorter than "aaaaaaaaaabcdefgh" (both strings have length $17$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>