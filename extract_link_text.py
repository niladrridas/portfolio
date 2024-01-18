html_code = '<li><a href="https://github.com/niladrigithub">GitHub</a></li>'
start_index = html_code.find('">') + 2
end_index = html_code.find('</a>')
link_text = html_code[start_index:end_index]

# Capitalize the first letter while maintaining the original case
capitalized_link_text = link_text.title()

print(capitalized_link_text)
