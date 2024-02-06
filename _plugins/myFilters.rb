# https://stackoverflow.com/questions/14978474/how-to-show-the-modification-date-of-a-file-in-jekyll

module Jekyll
  module MyFilters
    def file_date(input)
      File.mtime(input)
    end
  end
end

Liquid::Template.register_filter(Jekyll::MyFilters)

