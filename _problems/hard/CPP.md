---
{"category_name":"hard","problem_code":"CPP","problem_name":"Chef Protection Plan","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"pieguy","date_added":"16-01-2013","tags":{"0":"grammar","1":"hard","2":"may13","3":"regex","4":"string","5":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/CPP","time":{"view_start_date":1368441257,"submit_start_date":1368441000,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef's restaurants are under attack. His competitors in disguise of customers or employees visit his restaurants and create trouble. Chef is extremely agitated. When he calms down he decides to beef up security. The plan is codenamed "Chef Protection Plan". Under this plan, everything is checked before being entered into restaurants. After much thinking it was decided to check for identification numbers of cooks, customers, delivery van etc. Various types of identification numbers to be checked are : "Security number", "Employee number", "Roll number" etc.</p>
<p>Chef has restaurants all over the world. Different places have different <b>format</b>s for a given <b>identification number</b> and there are too many types of identification numbers. Thus Chef needs to specify the format for all the identification numbers in a convenient way. The format should also be consistent because the code monkeys who will be automating the process are not very careful with specifications. An identification number is composed of uppercase letters and digits and hyphen ('-') only. Thus instead of calling it an identification number, we will call it an <b>ID string</b> henceforth.<br/>The rules used by Chef for specifying a <b>format of an ID string</b> are (formats are underlined)-</br/></p>
<ul>
<li>A portion of string can be a fixed string, i.e. matches itself exactly only. Like <u>XYZ</u>, <u>A321</u>, <u>D-409</u> etc.</li>
<li>The specification contains keywords in lowercase to describe the ID string. This is the list of keywords, along with their meaning-<br/> - <b>to</b> : is used for specifying a <i>range</i> from a letter to letter or a digit to digit. Like <u>3 to 8</u>, <u>D to Z</u> etc. Note that ranges of numbers cannot be specified using <b>to</b>. <u>1 to 1000</u> is <b>invalid</b> because 1000 is not a digit but a number. Also <u>D to A</u> is invalid because the left-hand-side should not be greater than the right-hand-side.<br/> - <b>or</b> : is used to specify a list of exclusive options. Like <u>XYZ or Y2K</u>, <u>1 or 3 or 55</u> etc.<br/> - <b>times</b> : is used to specify the number of times (<b>N</b>) a portion of the format string is to be repeated. Like <u>A 3 times</u>, <u>S01 12 times</u> etc. The first example can also be specified simply as <u>AAA</u> instead. Thus as you will see there are multiple ways to specify same type of ID strings. Also the portion (to be repeated) is smallest meaningful expression. Like in <u>A B 2 times</u>, 'B' is repeated 2 times and not 'AB'.<br/> - <b>optional</b> : is used to specify that the string portion is optional, i.e can be present or absent. Like <u>LP optional</u>, <u>12KL optional</u> etc. Also the portion (to be made optional) is smallest meaningful expression. Like in <u>A B optional</u>, 'B' is optional and not 'AB'.<br/> - <b>digit</b> : is used to specify any digit. It is same as writing <u>0 to 9</u> or <u>0 or 1 or 2 or 3 or 4 or 5 or 6 or 7 or 8 or 9</u> in the rule.<br/> - <b>letter</b> : is used to specify any letter. It is same as writing <u>A to Z</u> or <u>A or B or C...</u> in the rule.<br/> - <b>digits</b> : is used to specify the number of times any digit may be repeated. It can be specified in two ways-<br/> -- <b>exactly N digits</b>, where <b>N</b> is an integer. Like <u>exactly 3 digits</u> matches 007 and 987 but not 5 or 42<br/> -- <b>upto N digits</b>, where <b>N</b> is an integer. Like <u>upto 3 digits</u> matches 7, 42 and 987 but not 4444. This rule can also match 0 digits. See the examples below.<br/> - <b>letters</b> : is used to specify the number of times any letter may be repeated. It can be specified in two ways-<br/> -- <b>exactly N letters</b>, where <b>N</b> is an integer. Like <u>exactly 3 letters</u> matches ABC and CPP but not Z or VG<br/> -- <b>upto N letters</b>, where <b>N</b> is an integer. Like <u>upto 3 letters</u> matches A, BC and DEF but not PQRS. This rule can also match 0 letters.
<li>The above keywords can be used to describe a portion of the format string. By writing such "sub-formats" side by side we can describe entire ID string. Like <u>3 to 8 XYZ or Y2K</u> matches 4XYZ, 7Y2K etc. but not XYZ, Y2K5 etc.</li>
<li>The sub-formats can be nested as well. Like <u>3 to 8 or Y2K</u>, <u>digit 2 times</u>. Notice that second example is equivalent to <u>exactly 2 digits</u>.</li>
<li>Parentheses can be used to enforce grouping in formats or to provide clarity. Like <u>XYZ 12 or 34 optional</u> makes 34 optional. Instead if you want '12 or 34' to be optional, you can use parentheses : <u>XYZ (12 or 34) optional</u>. Parenthesis can also be used when they are not really required. Like <u>((XYZ)) 234</u> is equivalent to <u>XYZ 234</u>, which can also be written as <u>XYZ234</u>. Note that <u>()</u> is invalid, because Chef believes empty parenthesis are useless.</li>
<li>Spaces are used to separate keywords, strings, numbers, digits and letters from each other. Like <u>ABCoptional</u> is invalid, but <u>ABC optional</u> is valid. Spaces are very useful in breaking apart strings, like <u>AB CD 2 times</u>. Parenthesis can also be used for separation, like <u>AB(CD)2 times</u> is same as the last format. But <u>A(to)B</u> is invalid as parenthesis enforce grouping as well and <u>(to)</u> alone is invalid.</li>
</br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></br/></li></ul>

<p>Now Chef is lousy at writing formats. Like he can add unnecessary spaces around words. He won't add stray symbols though. Also being a human he can sometimes end up writing erroneous formats -- the ones which do not conform to his rules. Like <u>optional ABC</u>, <u>1 to A</u> etc. are invalid formats. <b>But he would never use symbols apart from lowercase/uppercase letter, digits, parenthesis, hyphen(-) and space.</b></p>
<h3>Input</h3>
<p>First line contains a single integer <b>T</b>, which specifies the number of test cases. First line of each test case contains <b>F</b>, the format of an ID string. The next line contains an integer <b>Q</b>. Then the next Q lines contain <b>IDS</b>, one ID string on each line.</p>
<h3>Output</h3>
<p>For each ID string output "Valid-ID" if the ID string conforms to the format, "Invalid-ID" otherwise. You need to ignore the queries (ID strings) for the following type of formats-</p>
<p>1. If the format is inconsistent with the rules, output "Format does not conform". </p>
<p>2. If the format is consistent with rules but can match ID strings which exceed the constraint imposed on <b>IDS</b> (possible length of IDS > 2000), output "Matches too long ID".</p>
<p>3. If <b>N</b> (used in <u>X N times</u>, <u>exactly N digits</u> etc.) is less than 2 or greater than 12, output "Format does not conform"</p>
<p>After each test case output an empty line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>length of F</b> ≤ 1000</li>
<li>0 ≤ <b>Q</b> ≤ 1000</li>
<li>1 ≤ <b>length of IDS</b> ≤ 2000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
  A to D - 1 to 4 exactly 2 digits  
5
D-409
A-413
CD-123
M987
B-1
1 to 9 digit optional    digit optional -   CO or EC or IT - 09
4
326-CO-09
123-EC-09
1-IT-09
123-EC-08
X (YZ 1 optional  A413)     optional
3
X
XYZA413
XYZ1A413
A to G upto 2 digits (1 or 3 or 5) 2 times  
4
A15
G633
a15
B5
12times
1
123456789012

<b>Output:</b>
Valid-ID
Valid-ID
Invalid-ID
Invalid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID
Invalid-ID

Valid-ID
Valid-ID
Valid-ID

Valid-ID
Valid-ID
Invalid-ID
Invalid-ID

Format does not conform

</pre><h3>Notes</h3>
<ul>
<li>"or" has the least precedence among all keywords. For example <u>1 or 2 3 times</u> is interpreted as <u>1 or (2 3 times)</u> instead of <u>(1 or 2) 3 times</u>.</li>
<li>"optional" and "times" have equal precedence, which is lower than all other keywords but higher than "or". Like  <u>1 to 3 4 times</u> is interpreted as <u>(1 to 3) 4 times</u>.</li>
</ul>
