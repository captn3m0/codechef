---
{"category_name":"easy","problem_code":"PALPALS","problem_name":"Palpal Strings","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\nacbbbadzdz\r\nabcd\r\nxyxyxy","output":"YES\r\nNO\r\nYES","explanation":"**Example case 1:** The string \u0022acbbbadzdz\u0022 can be rearranged to \u0022abbbaddzcz\u0022, which is the Palpal string mentioned above.\r\n\r\n**Example case 2:** It can be shown that \u0022abcd\u0022 cannot be rearranged to form a Palpal string.\r\n\r\n**Example case 3:** The string \u0022xyxyxy\u0022 is already a Palpal string, since it can divided into \u0022xyx\u0022 and \u0022yxy\u0022.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/FRNBVAx9Kxg","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"jeevanjyot","problem_tester":"","date_added":"22-02-2021","tags":{"0":"easy","1":"jeevanjyot","2":"ltime93","3":"strings"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PALPALS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PALPALS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/PALPALS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/PALPALS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/PALPALS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/PALPALS.pdf) as well.

A string is called a *Palpal string* if it can be divided into contiguous substrings such that:
- Each character of the whole string belongs to exactly one substring.
- Each of these substrings is a palindrome with length greater than $1$.

For example, "abbbaddzcz" is a Palpal string, since it can be divided into "abbba", "dd" and "zcz".

You are given a string $s$. You may rearrange the characters of this string in any way you choose. Find out if it is possible to rearrange them in such a way that you obtain a Palpal string.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $s$.

### Output
For each test case, print a single line containing the string `"YES"` if the characters of $s$ can be rearranged to form a Palpal string or `"NO"` if it is impossible (without quotes).

You may print each character of each string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \le T \le 10^5$
- $1 \le |s| \le 100$
- $s$ contains only lowercase English letters
- the sum of $|s|$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
acbbbadzdz
abcd
xyxyxy
```

### Example Output
```
YES
NO
YES
```

### Explanation
**Example case 1:** The string "acbbbadzdz" can be rearranged to "abbbaddzcz", which is the Palpal string mentioned above.

**Example case 2:** It can be shown that "abcd" cannot be rearranged to form a Palpal string.

**Example case 3:** The string "xyxyxy" is already a Palpal string, since it can divided into "xyx" and "yxy".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>