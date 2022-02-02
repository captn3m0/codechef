---
{"category_name":"school","problem_code":"EVENTUAL","problem_name":"Even-tual Reduction","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n6\r\ncabbac\r\n7\r\nacabbad\r\n18\r\nfbedfcbdaebaaceeba\r\n21\r\nyourcrushlovesyouback","output":"YES\r\nNO\r\nYES\r\nNO","explanation":"**Example case 1:** We can perform two operations: erase the substring \u0022abba\u0022, which leaves us with the string \u0022cc\u0022, and then erase \u0022cc\u0022.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/o3T3W4txsds","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sjshohag","problem_tester":"","date_added":"9-07-2020","tags":{"0":"cakewalk","1":"cook120","2":"rajarshi_basu","3":"sjshohag"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EVENTUAL","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EVENTUAL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/EVENTUAL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/EVENTUAL.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/EVENTUAL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/EVENTUAL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/EVENTUAL.pdf) as well.

You are given a string $S$ with length $N$. You may perform the following operation any number of times: choose a non-empty substring of $S$ (possibly the whole string $S$) such that each character occurs an even number of times **in this substring** and erase this substring from $S$. (The parts of $S$ before and after the erased substring are concatenated and the next operation is performed on this shorter string.)

For example, from the string "ac**abba**d", we can erase the highlighted substring "abba", since each character occurs an even number of times in this substring. After this operation, the remaining string is "acd".

Is it possible to erase the whole string using one or more operations?

Note: A string $B$ is a substring of a string $A$ if $B$ can be obtained from $A$ by deleting several (possibly none or all) characters from the beginning and several (possibly none or all) characters from the end.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to erase the whole string or `"NO"` otherwise (without quotes).

### Constraints
- $1 \le T \le 200$
- $1 \le N \le 1,000$
- $S$ contains only lowercase English letters

### Example Input
```
4
6
cabbac
7
acabbad
18
fbedfcbdaebaaceeba
21
yourcrushlovesyouback
```
### Example Output
```
YES
NO
YES
NO
```

### Explanation
**Example case 1:** We can perform two operations: erase the substring "abba", which leaves us with the string "cc", and then erase "cc".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>