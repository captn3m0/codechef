---
{"category_name":"easy","problem_code":"CORTSENT","problem_name":"Correct Sentence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 aN\r\n2 ab NO\r\n3 A N D","output":"NO\r\nYES\r\nNO","explanation":"**Example case 1:** A single word cannot contain characters from both languages.\r\n\r\n**Example case 2:** This could be a sentence formed by Chef since each word contains only characters from a single language.\r\n\r\n**Example case 3:** Letters \u0027A\u0027 and \u0027D\u0027 do not belong to either of the two languages.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/aLm2IiFhmVE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"27-05-2021","tags":{"0":"daanish_adm","1":"simple","2":"start4"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CORTSENT","time":{"view_start_date":1622381400,"submit_start_date":1622381400,"visible_start_date":1622381400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CORTSENT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START4/bengali/CORTSENT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START4/mandarin/CORTSENT.pdf), [Russian](https://www.codechef.com/download/translated/START4/russian/CORTSENT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START4/vietnamese/CORTSENT.pdf) as well.

Chef knows about two languages spoken in Chefland, but he is not proficient in any of them. The first language contains lowercase English letters between 'a' and 'm' inclusive and the second language contains only uppercase English letters between 'N' and 'Z' inclusive.

Due to Chef's limited vocabulary, he sometimes mixes the languages when forming a sentence — each word of Chef's sentence contains only characters from one of the languages, but different words may come from different languages.

You are given a sentence as a sequence of $K$ words $S_1, S_2, \ldots, S_K$. Determine whether it could be a sentence formed by Chef, i.e. if it contains only the characters from the two given languages and each word contains only characters from a single language.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains an integer $K$ followed by a space and $K$ space-separated strings $S_1, S_2, \ldots, S_K$. 

### Output
For each test case, print a single line containing the string `"YES"` if the given sentence can be formed by Chef or `"NO"` if it cannot.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

### Constraints
- $1 \le T \le 10^5$
- $1 \leq K \leq 10$
- $1 \leq |S_i| \leq 100$ for each valid $i$
- the sum of lengths of all the strings on the input does not exceed $10^5$
- each string contains only lowercase and uppercase English letters

### Example Input
```
3
1 aN
2 ab NO
3 A N D
```

### Example Output
```
NO
YES
NO
```
	
### Explanation
**Example case 1:** A single word cannot contain characters from both languages.

**Example case 2:** This could be a sentence formed by Chef since each word contains only characters from a single language.

**Example case 3:** Letters 'A' and 'D' do not belong to either of the two languages.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>